<?php

namespace KnpU\LoremIpsumBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('knpu_lorem_ipsum');
        $rootNode = $treeBuilder->root('knpu_lorem_ipsum');
        /* Attention Symfony 4.3:
            $treeBuilder = new TreeBuilder('knpu_lorem_ipsum');
            $rootNode = $treeBuilder->getRootNode();
            // ...
        */

        // php bin/console config:dump knpu_lorem_ipsum

        $rootNode
            ->children()
            ->booleanNode('unicorns_are_real')->defaultTrue()->info('Whether or not you believe in unicorns')->end()
            ->integerNode('min_sunshine')->defaultValue(3)->info('How much do you like sunshine?')->end()
            ->end()
        ;
        return $treeBuilder;
    }
}
