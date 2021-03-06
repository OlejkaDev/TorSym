<?php

namespace App\UserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('app_user');

        // Set Configuration
        $rootNode
            ->children()
                ->scalarNode('user_class')->defaultValue('')->end()
                ->scalarNode('profile_class')->defaultValue('')->end()
                ->scalarNode('group_class')->defaultValue('')->end()
                ->scalarNode('default_group')->defaultValue('')->end()
                ->scalarNode('login_redirect')->defaultValue('/')->end()
                ->booleanNode('email_confirmation')->defaultFalse()->end()
                ->booleanNode('welcome_email')->defaultTrue()->end()
                ->booleanNode('user_registration')->defaultTrue()->end()
                ->scalarNode('template_path')->defaultValue('@PdUser')->end()
                ->integerNode('resetting_request_time')->defaultValue(7200)->end()
                ->scalarNode('mail_sender_address')->defaultValue('example@example.com')->end()
                ->scalarNode('mail_sender_name')->defaultValue('pdUser')->end()
                ->arrayNode('active_language')->scalarPrototype()->end()->defaultValue(['en'])->end()
            ->end();

        return $treeBuilder;
    }
}
