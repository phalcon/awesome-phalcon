<?php

use Symfony\Component\DomCrawler\Crawler;
use PhpQuery\PhpQuery as phpQuery;

require realpath(dirname(dirname(__FILE__))) .'/vendor/autoload.php';

PhpQuery::use_function();

function test()
{
    $html = <<<'HTML'
<body>
    <ul>
        <li>
            <ul>
                <li>foo</li>
                <li>bar</li>
            </ul>
        </li>
        <li>baz</li>
    </ul>
    <ul>
        <li>buz</li>
        <li>
            <ul>
                <li>
                    <ul>
                        <li>
                            <ul>
                                <li>
                                    we are here
                                </li>
                            </ul>
                        </li>
                        <li> simple node </li>
                    </ul>
                </li>
                <li> yet another node </li>
            </ul>
        </li>
    </ul>
    <ul>
        <li>uaz</li>
    </ul>
    <ul>
        <li>one</li>
        <li>two</li>
        <li>three</li>
        <li>four</li>
        <li>
            <ul>
                <li>
                    one 1
                </li>
                <li>
                    one 2
                </li>
            </ul>
        </li>
    </ul>
</body>
HTML;

    $crawler = new Crawler($html);

    $crawler
        ->filter('body > ul')
        ->each(function (Crawler $node, $i) {
            echo '========================================= ', $i + 1, ' =========================================', PHP_EOL;
            loop($node);
            echo '=======================================================================================', PHP_EOL, PHP_EOL, PHP_EOL;
        });
}

function loop(Crawler $node)
{
    echo 'This node contains ', $node->filter('ul li ul')->count(), ' <UL> ', PHP_EOL;

    if ($node->filter('ul')->count() > 1) {
        $node->filter('ul')->each(function(Crawler $crawler, $i) use ($node) {
            echo $i, ' .....................................', PHP_EOL;
           // echo $node->eq(0)->html();
            //  $html =  $node->html();
            //echo $node->children()->html(), PHP_EOL;
            $node->detach($crawler);
            loop($crawler->children());

            //unset($node[$node->children()]);
            //$node->detach($node->current())
            //$node->detach($node->children());
        });
    }
    echo $node->html(), PHP_EOL;
    //checkAlphabeticOrder($node);
}

function checkAlphabeticOrder(Crawler $node)
{
    echo '~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~', PHP_EOL;
    //echo 'This sub node has ', $node->filter('ul')->count(), ' <UL> ', PHP_EOL;
    echo $node->text(), PHP_EOL;
    echo '~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~', PHP_EOL;
}

test();


