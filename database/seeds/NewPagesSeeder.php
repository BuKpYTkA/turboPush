<?php

use App\Models\Page\Page;
use Illuminate\Database\Seeder;

/**
 * Class NewPagesSeeder
 */
class NewPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var Page $agroTechPage */
        $agroTechPage = Page::query()->where('alias', '/agro-tech')->first();

        /** @var Page $trucksPage */
        $trucksPage = Page::query()->create([
            'alias' => '/trucks'
        ]);

        $trucksPage->content()->create([
            'section' => 'section_1',
            'text' => $agroTechPage->content->where('section', 'section_1')->first()->text,
        ]);

        $trucksPage->content()->create([
            'section' => 'we_serve',
            'text' => $agroTechPage->content->where('section', 'we_serve')->first()->text,
        ]);

        /** @var Page $specTechPage */
        $specTechPage = Page::query()->create([
            'alias' => '/spec-tech'
        ]);

        $specTechPage->content()->create([
            'section' => 'section_1',
            'text' => $agroTechPage->content->where('section', 'section_1')->first()->text,
        ]);

        $specTechPage->content()->create([
            'section' => 'we_serve',
            'text' => $agroTechPage->content->where('section', 'we_serve')->first()->text,
        ]);
    }
}
