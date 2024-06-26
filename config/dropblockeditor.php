<?php

use App\Classes\Blocks\Example;

return [



    'include_js' => true,

    'include_css' => true,


    'brand' => [
        'logo' => '

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" viewBox="5 5 90 90">
  <g stroke="#d61111" stroke-width="1.8349112860948855px">
    <g fill="#303030">
      <path d="M21.719 5L5 21.719V78.28L21.719 95h56.563L95 78.281V21.72L78.282 5zm1.5 3.125h53.563l15.093 15.094V76.78L76.782 91.875H23.219L8.125 76.781V23.22z">

      </path>

    </g>
     <g fill="#d0021b"  >
            <path d="M36.703 11.011L9.638 26.636v12.121l27.065-15.626 27.064 15.626V26.636zm26.595 78.081L36.233 73.467V61.348l27.065 15.625 27.064-15.625v12.119z">
            </path>
            <path d="M9.638 42.012l27.065-15.626 10.495 6.06-27.064 15.626v31.252l-10.496-6.06zm67.445-23.14L50.018 3.247l-10.496 6.06 27.064 15.625v31.252l10.497-6.06z">
            </path>
            <path d="M23.01 81.127l.001-31.251 10.496-6.06v31.252l27.064 15.625-10.496 6.061zm67.352-23.035V26.84l-10.496-6.06v31.251L52.802 67.658l10.496 6.061z">
            </path>
          </g>
  </g>
  </svg>


',
'colors' => [
'topbar_bg' => 'bg-gray-800 text-gray-800',
],
],


'blocks' => [
Example::class,
],
'parsers' => [
Mo_sweed\DropBlockEditor\Parsers\Html::class,
Mo_sweed\DropBlockEditor\Parsers\Editor::class,
],


];