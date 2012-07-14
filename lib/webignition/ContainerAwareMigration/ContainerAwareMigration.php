<?php
namespace webignition\ContainerAwareMigration;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema,
    Symfony\Component\DependencyInjection\ContainerAwareInterface,
    Symfony\Component\DependencyInjection\ContainerInterface;

abstract class ContainerAwareMigration extends AbstractMigration implements ContainerAwareInterface
{
    /**
     *
     * @var Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
}
