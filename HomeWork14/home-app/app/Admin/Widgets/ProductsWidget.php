<?php

namespace App\Admin\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Category;

class ProductsWidget extends AbstractWidget {
    protected $config = [];

    public function run() {
        $count = Category::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'title' => 'Счетчик продуктов',
            'text' => "Количество: $count",
            'button' => [
                'text' => 'Перейти к списку',
                'link' => '',
            ],
            'image' => 'news-bg.png',
        ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}