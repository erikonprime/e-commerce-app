<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Orders;
use App\Entity\Product;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/admin', name: 'admin_')]
class DashboardController extends AbstractDashboardController
{
    #[Route('/dashboard', name: 'main')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
        //  return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Store BE');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::subMenu('Sales', 'fas fa-list')
            ->setSubItems(
                [
                    MenuItem::linkToCrud('Orders', 'fas fa-tag', Orders::class),
                 //   MenuItem::linkToCrud('Invoices', 'fas fa-tag', Orders::class),
                ]
            );

        yield MenuItem::subMenu('Catalog', 'fas fa-list')
            ->setSubItems(
                [
                    MenuItem::linkToCrud('Category', 'fas fa-tag', Category::class),
                    MenuItem::linkToCrud('Product', 'fas fa-tag', Product::class),
                ]
            );
        yield MenuItem::subMenu('Customers', 'fas fa-list')
            ->setSubItems(
                [
                    MenuItem::linkToCrud('User', 'fas fa-tag', User::class),
                ]
            );

    }
}
