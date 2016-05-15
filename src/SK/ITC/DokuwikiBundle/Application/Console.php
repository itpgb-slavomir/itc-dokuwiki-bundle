<?php
/**
 * SK ITC Dokuwiki Bundle Console Application
 *
 * @author Slavomir Kuzma <slavomir.kuzma@gmail.com>
 */
namespace SK\ITC\DokuwikiBundle\Application;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\HttpKernel\KernelInterface;

class Console extends Application
{

	/**
	 * Generated By
	 *
	 * @link http://patorjk.com/software/taag/#p=display&h=1&f=Slant&t=ITC%20Dokuwiki
	 * @var string
	 */
	private static $logo = "    ____ ______ ______   ____          __                     _  __    _
   /  _//_  __// ____/  / __ \ ____   / /__ __  __ _      __ (_)/ /__ (_)
   / /   / /  / /      / / / // __ \ / //_// / / /| | /| / // // //_// /
 _/ /   / /  / /___   / /_/ // /_/ // ,<  / /_/ / | |/ |/ // // ,<  / /
/___/  /_/   \____/  /_____/ \____//_/|_| \__,_/  |__/|__//_//_/|_|/_/
                                                                         ";

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \Symfony\Component\Console\Application::__construct()
	 */
	public function __construct( KernelInterface $kernel, $name = 'ITCloud Dokuwiki Console', $version = '${project.version}' )
	{
		parent::__construct( $kernel );

		$this->setName( $name );
		$this->setVersion( $version );
	}

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \Symfony\Component\Console\Application::getHelp()
	 */
	public function getHelp()
	{
		return self::$logo . parent::getHelp();
	}
}