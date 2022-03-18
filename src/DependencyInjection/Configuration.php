<?php

namespace Byscripts\Bundle\StaticEntityBundle\DependencyInjection;

use App\Kernel;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        if (Kernel::VERSION_ID >= 40200) {
            $treeBuilder = new TreeBuilder('byscripts_static_entity');
            $rootNode = $treeBuilder->getRootNode('byscripts_static_entity');
        } else {
            $treeBuilder = new TreeBuilder();
            $rootNode = $treeBuilder->root('byscripts_static_entity');
        }
        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.
        return $treeBuilder;
    }
}

