<?php
/**
 * Description
 *
 * @category Vendor
 * @package Vendor/Module
 * @author Stanislav Miroshnyk <smiroshnyk@gomage.com>
 * @copyright 2024 GoMage
 */
declare(strict_types=1);

namespace Stmir\Test\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Serialize\SerializerInterface;

/**
 * Class Data
 */
class Data extends AbstractHelper
{
    public function __construct(
        Context $context,
        protected SerializerInterface $serializer
    ) {
    }

    public function getSerializedData($data)
    {
        if ($data['test'] === 'test') {
            $data['skip'] = true;
        }

        return $this->serializer->serialize($data);
    }
}
