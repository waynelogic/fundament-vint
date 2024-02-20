<section>
    <div class="container py-12">

        @php($arResearch = [
            'Определение грунтовых свойств и их носимости',
            'Исследование влажности и плотности грунта',
            'Анализ состава грунта для определения его механических характеристик',
            'Рекомендации по выбору оптимального типа фундамента',
            'Предоставление детальных отчетов и графиков исследования',
        ])
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10" id="soil-research">
            <div>
                <x-heading divide="true" title="Исследование грунтов" subtitle="Услуги по геологическому исследованию грунта"/>

                <p>Мы являемся экспертами в области исследования грунтов, предоставляя точные данные для проектирования устойчивых фундаментов.</p>

                <hr class="my-7">
                <ul class="list-disc flex flex-col space-y-2 mb-4">
                    @foreach($arResearch as $obItem)
                        <li class="flex space-x-2">
                            <x-heroicon-s-check class="h-5 w-5 p-0.5 text-blue-600 bg-blue-100 rounded-full mr-2"/>
                            <span class="font-semibold">{{ $obItem }}</span>
                        </li>
                    @endforeach
                </ul>
                <p>Наши исследования грунта обеспечивают основу для надежных инженерных решений, гарантируя долгосрочную устойчивость вашего строения.</p>
            </div>
            <div>
                <img class="rounded-3xl shadow-lg" src="https://iziskania.com/sites/default/files/paragraph/text-image/real_1570790268_0.jpg" alt="">
            </div>
        </div>


        @php($arMontage = [
            'Сборка и установка стальных ферм и балок',
            'Монтаж металлических строительных конструкций различной сложности',
            'Проведение сварочных работ и контроль качества',
            'Разработка индивидуальных проектов с учетом требований заказчика',
            'Соблюдение стандартов безопасности и норм строительства',
        ])

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 pt-12" id="installation">
            <div class="max-lg:order-last">
                <img class="rounded-3xl shadow-lg" src="images/home/monage.png" alt="">
            </div>
            <div>
                <x-heading divide="true" title="Монтаж металлоконструкций" subtitle="Услуги по монтажу металлоконструкций"/>

                <p>Наша компания специализируется на профессиональном монтаже металлоконструкций, предоставляя надежные и инновационные решения.</p>


                <hr class="my-7">
                <ul class="list-disc flex flex-col space-y-2 mb-4">
                    @foreach($arMontage as $obItem)
                        <li class="flex space-x-2">
                            <x-heroicon-s-check class="h-5 w-5 p-0.5 text-blue-600 bg-blue-100 rounded-full mr-2"/>
                            <span class="font-semibold">{{ $obItem }}</span>
                        </li>
                    @endforeach
                </ul>
                <p>Наш опыт и профессионализм гарантируют, что монтаж металлоконструкций будет выполнен эффективно, обеспечивая прочность и устойчивость вашего строения.</p>
            </div>
        </div>

    </div>
</section>
