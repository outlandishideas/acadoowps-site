<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
	        new Outlandish\RoutemasterBundle\OutlandishRoutemasterBundle(),
	        new Outlandish\OowpBundle\OutlandishOowpBundle(),
            new Outlandish\AcadOowpBundle\OutlandishAcadOowpBundle(),
	        new Outlandish\SiteBundle\OutlandishSiteBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle()
    );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
		    $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
	    }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
