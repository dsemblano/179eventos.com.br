<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Randimg extends Composer
{
    /**
     * This tells the Composer that it should bind data to the 'example'
     * partial.
     */
    protected static $views = [
        'partials.section1',
        'partials.page-header',
        'partials.content',
        'sections.header',
    ];

        /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'rnd' => $this->rnd(),
            'randLogo' => $this->randLogo(),
            'randBg' => $this->randBg(),
        ];
    }
    
    /**
     * This will make the variable `$roots` available in the 'example' partial
     * with the value described here.
     */

    public function rnd()
    {
        return rand (1,4);
    }

    public function randLogo()
    {
        $randimg = $this->rnd();
        return \Roots\asset('images/logo_sand-'.$randimg.'.png');
    }

    public function randBg()
    {
        $randimg = $this->rnd();
        return \Roots\asset('images/background-'.$randimg.'.jpg');
    }

    // public function bgimg()
    // {
    //     $randimg = Randimg::rnd()->$rnd;
    //     $bgimg = \Roots\asset('images/background-'.$randimg.'jpg');
    //     return $bgimg;
    // }
}