<?php
/**
 * IConsumer.php
 *
 * @copyright      More in license.md
 * @license        http://www.ipublikuj.eu
 * @author         Adam Kadlec http://www.ipublikuj.eu
 * @package        iPublikuj:WebSocketsWAMP!
 * @subpackage     PushMessages
 * @since          1.0.0
 *
 * @date           28.02.17
 */

declare(strict_types = 1);

namespace IPub\WebSocketsWAMP\PushMessages;

use React;
use React\EventLoop;

use IPub;
use IPub\WebSocketsWAMP\Application;

/**
 * Server push consumer interface
 *
 * @package        iPublikuj:WebSocketsWAMP!
 * @subpackage     PushMessages
 *
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 */
interface IConsumer
{
	/**
	 * @param EventLoop\LoopInterface $loop
	 * @param Application\IApplication $application
	 *
	 * @return void
	 */
	function connect(EventLoop\LoopInterface $loop, Application\IApplication $application);

	/**
	 * @return string
	 */
	function getName() : string;

	/**
	 * @return void
	 */
	function close();
}
