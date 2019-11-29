<?php

namespace Frenzn\FooBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('frenzn_foo');
        
        $treeBuilder->getRootNode()
          ->children()
            ->scalarNode('foo')->isRequired()->cannotBeEmpty()->end()
          ->end()
        ;
        
        return $treeBuilder;
    }
}