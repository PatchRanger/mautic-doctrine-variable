<?php
/**
 * @copyright   2016 Dmitry Danilson. All rights reserved
 * @author      Dmitry Danilson
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
namespace MauticPlugin\DoctrineVariableBundle\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\DBAL\Event\ConnectionEventArgs;

/**
 * Class DoctrineSubscriber.
 */
class DoctrineSubscriber implements EventSubscriber
{
    /**
     * {@inheritdoc}
     */
    public function getSubscribedEvents()
    {
        return [
            \Doctrine\DBAL\Events::postConnect,
        ];
    }

    public function postConnect(ConnectionEventArgs $args)
    {
        $connection = $args->getConnection();
        $connection->exec(sprintf('SET session wait_timeout = %d;', 60));
    }
}
