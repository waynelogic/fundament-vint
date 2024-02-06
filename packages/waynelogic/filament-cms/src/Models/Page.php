<?php namespace Waynelogic\FilamentCms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Waynelogic\FilamentCms\Templates\TemplateManager;

class Page extends Model
{
    use HasFactory;

    public $table = 'cms_pages';
    public $guarded = ['id'];

    public $casts = [
        'content' => 'json',
        'active' => 'boolean',
    ];

    public function children(): HasMany
    {
        return $this->hasMany(Page::class, 'parent_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    public static function boot(): void
    {
        parent::boot();

        static::saving(function ($model) {
            $model->url = self::generateUrl($model);

            $model->view = TemplateManager::getTemplateView($model->template);
        });

//        static::saved(function ($model) {
//
//        });
    }



    public function getTemplateModelAttribute() {
        return TemplateManager::getTemplate($this->template);
    }

    private static function generateUrl($model)
    {
        if ($model->parent_id) {
            $arSlugs = [];
            $arSlugs[] = $model->slug;
            $obCurrentParent = $model->parent;
            while ($obCurrentParent) {
                if ($obCurrentParent->slug == '/') {
                    break;
                }
                $arSlugs[] = $obCurrentParent->slug;
                $obCurrentParent = $obCurrentParent->parent;
            }
            $arSlugs = array_reverse($arSlugs);
            return implode('/', $arSlugs);
        }


        return $model->slug;
    }
}
