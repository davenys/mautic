<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\PageBundle\Event;

use Mautic\CoreBundle\Event\CommonEvent;
use Mautic\PageBundle\Entity\Page;

/**
 * Class PageEvent
 *
 * @package Mautic\PageBundle\Event
 */
class PageEvent extends CommonEvent
{
    /**
     * @param Page $page
     * @param bool $isNew
     */
    public function __construct(Page &$page, $isNew = false)
    {
        $this->entity  =& $page;
        $this->isNew = $isNew;
    }

    /**
     * Returns the Page entity
     *
     * @return Page
     */
    public function getPage()
    {
        return $this->entity;
    }

    /**
     * Sets the Page entity
     *
     * @param Page $page
     */
    public function setPage(Page $page)
    {
        $this->entity = $page;
    }
}