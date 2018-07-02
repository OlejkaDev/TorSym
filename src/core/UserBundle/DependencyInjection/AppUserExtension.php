<?php

namespace App\UserBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @see http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class AppUserExtension extends Extension
{
    /**
     * Load Bundle Config and Services.
     *
     * @param array            $configs
     * @param ContainerBuilder $container
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        // Load Configuration
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        // Set Configuration
        $container->setParameter('app_user.user_class', $config['user_class']);
        $container->setParameter('app_user.profile_class', $config['profile_class']);
        $container->setParameter('app_user.group_class', $config['group_class']);
        $container->setParameter('app_user.default_group', $config['default_group']);
        $container->setParameter('app_user.login_redirect', $config['login_redirect']);
        $container->setParameter('app_user.email_confirmation', $config['email_confirmation']);
        $container->setParameter('app_user.welcome_email', $config['welcome_email']);
        $container->setParameter('app_user.user_registration', $config['user_registration']);
        $container->setParameter('app_user.template_path', $config['template_path']);
        $container->setParameter('app_user.resetting_request_time', $config['resetting_request_time']);
        $container->setParameter('app_user.mail_sender_address', $config['mail_sender_address']);
        $container->setParameter('app_user.mail_sender_name', $config['mail_sender_name']);
        $container->setParameter('app_user.active_language', $config['active_language']);

        // Load Services
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');
    }
}
