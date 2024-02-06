<?php namespace Waynelogic\FilamentCms\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    use HasFactory;

    protected $table = 'settings';
    public string $dataColumn = 'value';
    protected $passthru = ['name', 'created_at', 'updated_at'];
    protected $guarded = ['id'];
    protected $casts = [
        'value' => 'array',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->name = $this->settingsCode;
    }

    /**
     * instance of the settings model
     */
    public static function instance()
    {
        $model = new static;

        $item = $model->getSettingsRecord();

        if (!$item) {
            $model->initSettingsData();
            $item = $model;
        } else {
            $item->afterFetch();
        }

        return $item;
    }

    /**
     * set a single or array key pair of values
     */
    public static function set($key, $value = null)
    {
        $data = is_array($key) ? $key : [$key => $value];

        $obj = static::instance();

        $obj->forceFill($data);

        return $obj->save();
    }

    /**
     * get helper
     */
    public static function get($key, $default = null)
    {
        return Arr::get(static::instance(), $key, $default);
    }

    private function getSettingsRecord()
    {
        $record = $this->newQuery()
            ->where('name', $this->settingsCode)
            ->first();
        return $record ?: null;
    }

    /**
     * initSettingsData default values to set for this model, method override
     */
    public function initSettingsData()
    {
    }

    public function save(array $options = []): bool
    {
        $this->{$this->dataColumn} = array_diff_key(
            $this->attributes,
            array_flip($this->getPassthru())
        );
        $this->attributes = array_diff_key($this->attributes, $this->{$this->dataColumn});
        return parent::save($options);
    }
    private function getPassthru(): array
    {
        return array_merge([$this->getKeyName(), $this->dataColumn], $this->passthru);
    }
    public function afterFetch(): void
    {
        $this->attributes = array_merge($this->attributes, $this->{$this->dataColumn});
    }
}
