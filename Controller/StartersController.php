<?php

namespace SoftBpm\Layout\LimitlessBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StartersController extends Controller
{
    /**
     * @return array
     * @Route("/layout_sidebar_sticky", name="softbpm_layout_limitless_starters_layoutsidebarsticky")
     * @Template("@Limitless/Starters/layout_sidebar_sticky.html.twig")
     */
    public function layoutSidebarStickyAction()
    {
        return [];
    }

    /**
     * @return array
     * @Route("/layout_navbar_fixed_secondary", name="softbpm_layout_limitless_starters_layoutnavbarfixedsecondary")
     * @Template("@Limitless/Starters/layout_navbar_fixed_secondary.html.twig")
     */
    public function layoutNavbarFixedSecondaryAction()
    {
        return [];
    }

    /**
     * @return array
     * @Route("/layout_navbar_fixed_main", name="softbpm_layout_limitless_starters_layoutnavbarfixedmain")
     * @Template("@Limitless/Starters/layout_navbar_fixed_main.html.twig")
     */
    public function layoutNavbarFixedMainAction()
    {
        return [];
    }

    /**
     * @return array
     * @Route("/layout_navbar_fixed_both", name="softbpm_layout_limitless_starters_layoutnavbarfixedboth")
     * @Template("@Limitless/Starters/layout_navbar_fixed_both.html.twig")
     */
    public function layoutNavbarFixedBothAction()
    {
        return [];
    }

    /**
     * @return array
     * @Route("/layout_boxed", name="softbpm_layout_limitless_starters_layoutboxed")
     * @Template("@Limitless/Starters/layout_boxed.html.twig")
     */
    public function layoutBoxedAction()
    {
        return [];
    }

    /**
     * @return array
     * @Route("/1_col", name="softbpm_layout_limitless_starters_1col")
     * @Template("@Limitless/Starters/1_col.html.twig")
     */
    public function oneColAction()
    {
        return [];
    }

    /**
     * @return array
     * @Route("/2_col", name="softbpm_layout_limitless_starters_2col")
     * @Template("@Limitless/Starters/2_col.html.twig")
     */
    public function twoColAction()
    {
        return [];
    }

    /**
     * @return array
     * @Route("/3_col_double", name="softbpm_layout_limitless_starters_3coldouble")
     * @Template("@Limitless/Starters/3_col_double.html.twig")
     */
    public function threeColDoubleAction()
    {
        return [];
    }

    /**
     * @return array
     * @Route("/3_col_dual", name="softbpm_layout_limitless_starters_3coldual")
     * @Template("@Limitless/Starters/3_col_dual.html.twig")
     */
    public function threeColDualAction()
    {
        return [];
    }

    /**
     * @return array
     * @Route("/4_col", name="softbpm_layout_limitless_starters_4col")
     * @Template("@Limitless/Starters/4_col.html.twig")
     */
    public function fourColAction()
    {
        return [];
    }
}
