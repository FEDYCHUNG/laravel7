<?php
// $ php artisan make:component Sidebar

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $title;
    public $info;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $info)
    {
        $this->title = $title;
        $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar');
    }

    // All public function can be consumes directly by sidebar.blade.php
    // variabel $string passing by sidebar.blade.php
    public function list($string)
    {
        return [
            'hi',
            'hello',
            'aloha',
            $string,
        ];
    }
}