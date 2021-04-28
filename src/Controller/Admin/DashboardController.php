<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Customer;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Hair At Home');
    }

    /**
     * Generate and configure menuitems in the admin page
     *
     * @return iterable
     */
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Back to the website', 'fas fa-home', 'homepage');
        yield MenuItem::linkToCrud('Customers', 'fas fa-map-marker-alt', Customer::class);
        yield MenuItem::linkToCrud('Customers', 'fas fa-map-marker-alt', Customer::class);
    }
}
