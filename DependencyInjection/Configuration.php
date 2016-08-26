<?php

namespace CoffeeBike\OwasysBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('coffee_bike_owasys');

        $rootNode
            ->children()
            ->arrayNode('server')
            ->children()
            ->scalarNode('address')
            ->cannotBeEmpty()
            ->defaultValue('localhost')
            ->isRequired()
            ->end();

        return $treeBuilder;
    }
}
