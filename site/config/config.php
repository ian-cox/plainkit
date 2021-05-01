<?php
c::set('thumbs.driver', 'im');
return [
  'panel.install' => false,
  //'home' => 'alternate homepage',
  // 'kirby-extended.blurry-placeholder' => [
  //   'pixel-target' => 75,
  //   'srcset' => [
  //     'enable' => true,
  //     'preset' => 'text'
  //   ]
  // ],
  'afbora.kirby-minify-html.enabled' => true,
  'afbora.kirby-minify-html.options' => [
    'doOptimizeViaHtmlDomParser' => true, // set true/false or remove line to default
    'doRemoveSpacesBetweenTags'  => false // set true/false or remove line to default
  ],
]
?>