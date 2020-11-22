<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$words = ['sky', 'mountain', 'falcon', 'forest', 'rock', 'blue'];
$sentence = 'today is a windy day';
$images= ["https://placeimg.com/1000/1000/animals", 
        "https://placeimg.com/1000/1000/people", 
        "https://placeimg.com/1000/1000/nature",
        "https://placeimg.com/1000/1000/tech",
        "https://placeimg.com/1000/1000/arch"];

$lorem = " Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu purus id eros eleifend mattis. Fusce ultrices elementum nibh, ac pulvinar magna tempor quis. Nulla et varius mauris. Nullam vulputate urna vitae aliquet ultricies. Aenean laoreet, purus ut sodales commodo, ipsum justo luctus libero, id convallis nisi risus a arcu. Donec a iaculis metus. Mauris quis congue libero. In sed mauris urna. Fusce pharetra scelerisque elit ac scelerisque. Aenean id mauris urna. Suspendisse finibus arcu at libero scelerisque consectetur. Mauris gravida luctus tortor ut imperdiet. Aenean tincidunt finibus turpis, vitae dapibus tellus mollis a. Praesent mollis arcu at est dignissim blandit. Sed dignissim neque convallis elit dapibus, ac tristique tellus finibus. Aliquam ornare at eros vitae dictum.

Proin non nibh eu ex volutpat pharetra quis non neque. Donec sem tortor, rutrum tincidunt lacus eget, blandit tempus enim. Nunc a arcu risus. Donec pellentesque turpis id elit consectetur, quis eleifend ante tincidunt. Nunc interdum, odio eu vehicula accumsan, augue odio interdum massa, a semper tortor tellus ut turpis. Cras leo ante, rutrum tincidunt turpis a, varius dapibus sem. Aenean quis consectetur justo, eu luctus nisl. Vestibulum id tellus bibendum, mollis tortor in, venenatis nulla. Cras ante augue, mattis volutpat arcu dapibus, molestie finibus leo. Nulla tempus non sapien porta venenatis. In dui ipsum, congue eu pellentesque a, faucibus ut nisi. 

In eget fermentum purus. Fusce sodales sapien vel tincidunt pulvinar. Sed fermentum imperdiet pretium. Suspendisse ac efficitur risus, a maximus est. Donec id lacus sem. Aliquam tempus risus dignissim quam lacinia malesuada. Aenean ac nunc eget neque venenatis efficitur. Phasellus hendrerit sed mauris ut facilisis.

In hac habitasse platea dictumst. Nam malesuada mollis sapien sed dapibus. Proin aliquam ultricies purus, non aliquet augue blandit sit amet. Proin sit amet ipsum ac tortor ullamcorper iaculis sed nec nulla. Sed lobortis augue commodo orci pellentesque dictum. Curabitur congue ultricies iaculis. Vestibulum eget leo urna. Quisque eu eros ut lorem auctor scelerisque ut id velit. Proin laoreet felis in mi porttitor egestas. Aliquam erat volutpat. Nam ac ipsum nec neque ullamcorper hendrerit.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis nisl eu augue pharetra pellentesque. Nunc porttitor libero ut dictum dapibus. Sed ut dui sed purus pulvinar varius ut ac magna. In facilisis eros ut diam tempor, ac volutpat arcu aliquam. Aenean ut lacus arcu. Nullam pharetra condimentum aliquet. Mauris porttitor erat a velit convallis eleifend. Integer justo leo, fringilla posuere mauris nec, cursus fringilla dui. Aenean bibendum vel sapien fringilla accumsan. Praesent egestas sapien sed velit rutrum, pretium rhoncus enim congue. Aenean porta nunc eu luctus rhoncus. Donec a lectus eros. Morbi vel hendrerit ipsum, semper molestie leo. ";

echo $twig->render('second_tmp2.html.twig', 
    ['words' => $words, 'sentence' => $sentence, 'images' => $images, 'lorem' => $lorem]);