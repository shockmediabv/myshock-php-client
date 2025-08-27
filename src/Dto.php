<?php

// generated on 2025-08-27T10:42:03.956991505Z

namespace ShockMedia\Generated\Partners;


class DiscountGroup
{
    /**
     * @param \ShockMedia\Generated\Partners\DiscountSpec[] $discounts
     */
    public function __construct
    (
        public readonly string $name,
        public readonly int $sortPrio,
        public readonly array $discounts,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var int $sortPrio */
        $sortPrio = $decodedJson['sortPrio'];

        $var0 = array();
        foreach ($decodedJson['discounts'] as $element0) {
            $var0[] = \ShockMedia\Generated\Partners\DiscountSpec::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Partners\DiscountSpec[] $discounts */
        $discounts = $var0;

        return new DiscountGroup
        (
            $name, $sortPrio, $discounts
        );
    }
}


class DiscountSpec
{
    public function __construct
    (
        public readonly string $name,
        public readonly float $price,
        public readonly bool $priceVaries,
        public readonly float $kickbackFee,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var float $price */
        $price = $decodedJson['price'];

        /** @var bool $priceVaries */
        $priceVaries = $decodedJson['priceVaries'];

        /** @var float $kickbackFee */
        $kickbackFee = $decodedJson['kickbackFee'];

        return new DiscountSpec
        (
            $name, $price, $priceVaries, $kickbackFee
        );
    }
}


class KickbackClaim
{
    /**
     * @param \ShockMedia\Generated\Partners\ReleasedKickback[]|null $entries
     */
    public function __construct
    (
        public readonly int $id,
        public readonly float $amount,
        public readonly string $claimDate,
        public readonly string|null $payDate,
        public readonly array|null $entries,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var float $amount */
        $amount = $decodedJson['amount'];

        /** @var string $claimDate */
        $claimDate = $decodedJson['claimDate'];

        /** @var string|null $payDate */
        $payDate = $decodedJson['payDate'];

        if ($decodedJson['entries'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['entries'] as $element0) {
                $var0[] = \ShockMedia\Generated\Partners\ReleasedKickback::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Partners\ReleasedKickback[]|null $entries */
        $entries = $var0;

        return new KickbackClaim
        (
            $id, $amount, $claimDate, $payDate, $entries
        );
    }
}


class Kickback
{
    /**
     * @param string[] $serverNames
     */
    public function __construct
    (
        public readonly int|null $id,
        public readonly string $productName,
        public readonly float $kickbackFee,
        public readonly int $quantity,
        public readonly string|null $start,
        public readonly string|null $end,
        public readonly string|null $domain,
        public readonly array $serverNames,
        public readonly \ShockMedia\Generated\Customers\CustomerSummary $customer,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int|null $id */
        $id = $decodedJson['id'];

        /** @var string $productName */
        $productName = $decodedJson['productName'];

        /** @var float $kickbackFee */
        $kickbackFee = $decodedJson['kickbackFee'];

        /** @var int $quantity */
        $quantity = $decodedJson['quantity'];

        /** @var string|null $start */
        $start = $decodedJson['start'];

        /** @var string|null $end */
        $end = $decodedJson['end'];

        /** @var string|null $domain */
        $domain = $decodedJson['domain'];

        $var0 = array();
        foreach ($decodedJson['serverNames'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $serverNames */
        $serverNames = $var0;

        $customer = \ShockMedia\Generated\Customers\CustomerSummary::fromDecodedJson($decodedJson['customer']);

        return new Kickback
        (
            $id, $productName, $kickbackFee, $quantity, $start, $end, $domain, $serverNames, $customer
        );
    }
}


class ReleasedKickback
{
    /**
     * @param string[] $serverNames
     */
    public function __construct
    (
        public readonly int $id,
        public readonly string $startDate,
        public readonly string $endDate,
        public readonly float $fee,
        public readonly string $releaseDate,
        public readonly string $expireDate,
        public readonly float $kickbackFee,
        public readonly string $productName,
        public readonly string|null $domain,
        public readonly array $serverNames,
        public readonly \ShockMedia\Generated\Customers\CustomerSummary $customer,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $startDate */
        $startDate = $decodedJson['startDate'];

        /** @var string $endDate */
        $endDate = $decodedJson['endDate'];

        /** @var float $fee */
        $fee = $decodedJson['fee'];

        /** @var string $releaseDate */
        $releaseDate = $decodedJson['releaseDate'];

        /** @var string $expireDate */
        $expireDate = $decodedJson['expireDate'];

        /** @var float $kickbackFee */
        $kickbackFee = $decodedJson['kickbackFee'];

        /** @var string $productName */
        $productName = $decodedJson['productName'];

        /** @var string|null $domain */
        $domain = $decodedJson['domain'];

        $var0 = array();
        foreach ($decodedJson['serverNames'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $serverNames */
        $serverNames = $var0;

        $customer = \ShockMedia\Generated\Customers\CustomerSummary::fromDecodedJson($decodedJson['customer']);

        return new ReleasedKickback
        (
            $id, $startDate, $endDate, $fee, $releaseDate, $expireDate, $kickbackFee, $productName, $domain, $serverNames, $customer
        );
    }
}


class KickbackPartner
{
    public function __construct
    (
        public readonly \ShockMedia\Generated\Customers\CustomerSummary $customer,
        public readonly float $monthlyKickback,
        public readonly bool $canShadow,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $customer = \ShockMedia\Generated\Customers\CustomerSummary::fromDecodedJson($decodedJson['customer']);

        /** @var float $monthlyKickback */
        $monthlyKickback = $decodedJson['monthlyKickback'];

        /** @var bool $canShadow */
        $canShadow = $decodedJson['canShadow'];

        return new KickbackPartner
        (
            $customer, $monthlyKickback, $canShadow
        );
    }
}

namespace ShockMedia\Generated\Acquiredoffering;


class AcquiredOfferingFilter
{
    public function __construct
    (
        public readonly \ShockMedia\Generated\Acquiredoffering\AcquiredOfferingCategory|null $offeringCategory,
        public readonly string|null $name,
        public readonly bool $expired,
        public readonly \ShockMedia\Generated\Acquiredoffering\OfferingType|null $offeringType,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        if ($decodedJson['offeringCategory'] === NULL) {
            $offeringCategory = NULL;
        } else {
            $offeringCategory = \ShockMedia\Generated\Acquiredoffering\AcquiredOfferingCategory::from($decodedJson['offeringCategory']);
        }

        /** @var string|null $name */
        $name = $decodedJson['name'];

        /** @var bool $expired */
        $expired = $decodedJson['expired'];

        if ($decodedJson['offeringType'] === NULL) {
            $offeringType = NULL;
        } else {
            $offeringType = \ShockMedia\Generated\Acquiredoffering\OfferingType::from($decodedJson['offeringType']);
        }

        return new AcquiredOfferingFilter
        (
            $offeringCategory, $name, $expired, $offeringType
        );
    }
}


class AcquiredOffering
{
    /**
     * @param array{string,string}|null $mapProject
     * @param (array{string,int|null})[] $servers
     */
    public function __construct
    (
        public readonly int $acquiredId,
        public readonly float $discount,
        public readonly float $surcharge,
        public readonly int $quantity,
        public readonly string $start,
        public readonly string $startContract,
        public readonly string|null $end,
        public readonly string|null $earliestCancellationDate,
        public readonly \ShockMedia\Generated\Acquiredoffering\AcquiredOfferingCategory|null $offeringCategory,
        public readonly \ShockMedia\Generated\Acquiredoffering\OfferingType $offeringType,
        public readonly string $offeringName,
        public readonly float $offeringPrice,
        public readonly float $effectivePrice,
        public readonly string|null $serviceName,
        public readonly string|null $domainName,
        public readonly string|null $accountName,
        public readonly bool $canTransfer,
        public readonly array|null $mapProject,
        public readonly array $servers,
        public readonly bool $drs,
        public readonly \ShockMedia\Generated\Acquiredoffering\AcquiredOffering|null $extension,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $acquiredId */
        $acquiredId = $decodedJson['acquiredId'];

        /** @var float $discount */
        $discount = $decodedJson['discount'];

        /** @var float $surcharge */
        $surcharge = $decodedJson['surcharge'];

        /** @var int $quantity */
        $quantity = $decodedJson['quantity'];

        /** @var string $start */
        $start = $decodedJson['start'];

        /** @var string $startContract */
        $startContract = $decodedJson['startContract'];

        /** @var string|null $end */
        $end = $decodedJson['end'];

        /** @var string|null $earliestCancellationDate */
        $earliestCancellationDate = $decodedJson['earliestCancellationDate'];

        if ($decodedJson['offeringCategory'] === NULL) {
            $offeringCategory = NULL;
        } else {
            $offeringCategory = \ShockMedia\Generated\Acquiredoffering\AcquiredOfferingCategory::from($decodedJson['offeringCategory']);
        }

        $offeringType = \ShockMedia\Generated\Acquiredoffering\OfferingType::from($decodedJson['offeringType']);

        /** @var string $offeringName */
        $offeringName = $decodedJson['offeringName'];

        /** @var float $offeringPrice */
        $offeringPrice = $decodedJson['offeringPrice'];

        /** @var float $effectivePrice */
        $effectivePrice = $decodedJson['effectivePrice'];

        /** @var string|null $serviceName */
        $serviceName = $decodedJson['serviceName'];

        /** @var string|null $domainName */
        $domainName = $decodedJson['domainName'];

        /** @var string|null $accountName */
        $accountName = $decodedJson['accountName'];

        /** @var bool $canTransfer */
        $canTransfer = $decodedJson['canTransfer'];

        if ($decodedJson['mapProject'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            $var0[] = $decodedJson['mapProject'][0];
            $var0[] = $decodedJson['mapProject'][1];
        }
        /** @var array{string,string}|null $mapProject */
        $mapProject = $var0;

        $var0 = array();
        foreach ($decodedJson['servers'] as $element0) {
            $var1 = array();
            $var1[] = $element0[0];
            $var1[] = $element0[1];
            $var0[] = $var1;
        }
        /** @var (array{string,int|null})[] $servers */
        $servers = $var0;

        /** @var bool $drs */
        $drs = $decodedJson['drs'];

        if ($decodedJson['extension'] === NULL) {
            $extension = NULL;
        } else {
            $extension = \ShockMedia\Generated\Acquiredoffering\AcquiredOffering::fromDecodedJson($decodedJson['extension']);
        }

        return new AcquiredOffering
        (
            $acquiredId, $discount, $surcharge, $quantity, $start, $startContract, $end, $earliestCancellationDate, $offeringCategory, $offeringType, $offeringName, $offeringPrice, $effectivePrice, $serviceName, $domainName, $accountName, $canTransfer, $mapProject, $servers, $drs, $extension
        );
    }
}


enum OfferingType: string
{
    case plan = 'plan';
    case product = 'product';
}


enum AcquiredOfferingCategory: string
{
    case server_sla = 'server_sla';
    case magento = 'magento';
    case domain = 'domain';
    case hosting = 'hosting';
    case ssl = 'ssl';
    case license = 'license';
}

namespace ShockMedia\Generated\Map\Filters;


class AppFilter
{
    public function __construct
    (
        public readonly string|null $nameLike,
        public readonly string|null $projectId,
        public readonly string|null $buildTemplateLike,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $nameLike */
        $nameLike = $decodedJson['nameLike'];

        /** @var string|null $projectId */
        $projectId = $decodedJson['projectId'];

        /** @var string|null $buildTemplateLike */
        $buildTemplateLike = $decodedJson['buildTemplateLike'];

        return new AppFilter
        (
            $nameLike, $projectId, $buildTemplateLike
        );
    }
}


class BuildStatusFilter
{
    /**
     * @param array{\ShockMedia\Generated\RangeType,string|null,string|null}|null $createdAtInterval
     */
    public function __construct
    (
        public readonly string|null $appId,
        public readonly string|null $buildId,
        public readonly int|null $buildNumber,
        public readonly string|null $status,
        public readonly array|null $createdAtInterval,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $appId */
        $appId = $decodedJson['appId'];

        /** @var string|null $buildId */
        $buildId = $decodedJson['buildId'];

        /** @var int|null $buildNumber */
        $buildNumber = $decodedJson['buildNumber'];

        /** @var string|null $status */
        $status = $decodedJson['status'];

        if ($decodedJson['createdAtInterval'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            $var0[] = \ShockMedia\Generated\RangeType::from($decodedJson['createdAtInterval'][0]);
            $var0[] = $decodedJson['createdAtInterval'][1];
            $var0[] = $decodedJson['createdAtInterval'][2];
        }
        /** @var array{\ShockMedia\Generated\RangeType,string|null,string|null}|null $createdAtInterval */
        $createdAtInterval = $var0;

        return new BuildStatusFilter
        (
            $appId, $buildId, $buildNumber, $status, $createdAtInterval
        );
    }
}


class ProjectFilter
{
    public function __construct
    (
        public readonly string|null $nameLike,
        public readonly int|null $clusterId,
        public readonly int|null $customerId,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $nameLike */
        $nameLike = $decodedJson['nameLike'];

        /** @var int|null $clusterId */
        $clusterId = $decodedJson['clusterId'];

        /** @var int|null $customerId */
        $customerId = $decodedJson['customerId'];

        return new ProjectFilter
        (
            $nameLike, $clusterId, $customerId
        );
    }
}


class BuildFilter
{
    /**
     * @param array{\ShockMedia\Generated\RangeType,string|null,string|null}|null $uploadDateInterval
     */
    public function __construct
    (
        public readonly string|null $appId,
        public readonly string|null $appNameLike,
        public readonly string|null $projectFilePath,
        public readonly array|null $uploadDateInterval,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $appId */
        $appId = $decodedJson['appId'];

        /** @var string|null $appNameLike */
        $appNameLike = $decodedJson['appNameLike'];

        /** @var string|null $projectFilePath */
        $projectFilePath = $decodedJson['projectFilePath'];

        if ($decodedJson['uploadDateInterval'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            $var0[] = \ShockMedia\Generated\RangeType::from($decodedJson['uploadDateInterval'][0]);
            $var0[] = $decodedJson['uploadDateInterval'][1];
            $var0[] = $decodedJson['uploadDateInterval'][2];
        }
        /** @var array{\ShockMedia\Generated\RangeType,string|null,string|null}|null $uploadDateInterval */
        $uploadDateInterval = $var0;

        return new BuildFilter
        (
            $appId, $appNameLike, $projectFilePath, $uploadDateInterval
        );
    }
}


class BuildTemplateFilter
{
    public function __construct
    (
        public readonly string|null $nameLike,
        public readonly string|null $descriptionLike,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $nameLike */
        $nameLike = $decodedJson['nameLike'];

        /** @var string|null $descriptionLike */
        $descriptionLike = $decodedJson['descriptionLike'];

        return new BuildTemplateFilter
        (
            $nameLike, $descriptionLike
        );
    }
}


class ClusterFilter
{
    public function __construct
    (
        public readonly string|null $nameLike,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $nameLike */
        $nameLike = $decodedJson['nameLike'];

        return new ClusterFilter
        (
            $nameLike
        );
    }
}

namespace ShockMedia\Generated\Servers;


class BackupJob
{
    public function __construct
    (
        public readonly int $fileCount,
        public readonly int $size,
        public readonly string|null $completionTime,
        public readonly string $vendor,
        public readonly string $level,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $fileCount */
        $fileCount = $decodedJson['fileCount'];

        /** @var int $size */
        $size = $decodedJson['size'];

        /** @var string|null $completionTime */
        $completionTime = $decodedJson['completionTime'];

        /** @var string $vendor */
        $vendor = $decodedJson['vendor'];

        /** @var string $level */
        $level = $decodedJson['level'];

        return new BackupJob
        (
            $fileCount, $size, $completionTime, $vendor, $level
        );
    }
}


class BackupPlanSummary
{
    /**
     * @param \ShockMedia\Generated\Servers\BackupPlan[] $plans
     */
    public function __construct
    (
        public readonly array $plans,
        public readonly int $spaceUsedByThisServer,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $var0 = array();
        foreach ($decodedJson['plans'] as $element0) {
            $var0[] = \ShockMedia\Generated\Servers\BackupPlan::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Servers\BackupPlan[] $plans */
        $plans = $var0;

        /** @var int $spaceUsedByThisServer */
        $spaceUsedByThisServer = $decodedJson['spaceUsedByThisServer'];

        return new BackupPlanSummary
        (
            $plans, $spaceUsedByThisServer
        );
    }
}


class ServerStatisticsFilter
{
    public function __construct
    (
        public readonly bool|null $includeCPU,
        public readonly bool|null $includeTraffic,
        public readonly bool|null $includeTrafficIncrement,
        public readonly bool|null $includeDisk,
        public readonly bool|null $includeMax,
        public readonly bool|null $include95pct,
        public readonly bool|null $includeMin,
        public readonly bool|null $includeBackupUsage,
        public readonly bool|null $splitTrafficIncrement,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var bool|null $includeCPU */
        $includeCPU = $decodedJson['includeCPU'];

        /** @var bool|null $includeTraffic */
        $includeTraffic = $decodedJson['includeTraffic'];

        /** @var bool|null $includeTrafficIncrement */
        $includeTrafficIncrement = $decodedJson['includeTrafficIncrement'];

        /** @var bool|null $includeDisk */
        $includeDisk = $decodedJson['includeDisk'];

        /** @var bool|null $includeMax */
        $includeMax = $decodedJson['includeMax'];

        /** @var bool|null $include95pct */
        $include95pct = $decodedJson['include95pct'];

        /** @var bool|null $includeMin */
        $includeMin = $decodedJson['includeMin'];

        /** @var bool|null $includeBackupUsage */
        $includeBackupUsage = $decodedJson['includeBackupUsage'];

        /** @var bool|null $splitTrafficIncrement */
        $splitTrafficIncrement = $decodedJson['splitTrafficIncrement'];

        return new ServerStatisticsFilter
        (
            $includeCPU, $includeTraffic, $includeTrafficIncrement, $includeDisk, $includeMax, $include95pct, $includeMin, $includeBackupUsage, $splitTrafficIncrement
        );
    }
}


class VirtualMachineHddInfo
{
    public function __construct
    (
        public readonly int|null $size,
        public readonly int|null $id,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int|null $size */
        $size = $decodedJson['size'];

        /** @var int|null $id */
        $id = $decodedJson['id'];

        return new VirtualMachineHddInfo
        (
            $size, $id
        );
    }
}


class TriggerInfo
{
    public function __construct
    (
        public readonly string|null $description,
        public readonly \ShockMedia\Generated\Servers\TriggerPriority $priority,
        public readonly bool $triggered,
        public readonly string|null $lastChecked,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $description */
        $description = $decodedJson['description'];

        $priority = \ShockMedia\Generated\Servers\TriggerPriority::from($decodedJson['priority']);

        /** @var bool $triggered */
        $triggered = $decodedJson['triggered'];

        /** @var string|null $lastChecked */
        $lastChecked = $decodedJson['lastChecked'];

        return new TriggerInfo
        (
            $description, $priority, $triggered, $lastChecked
        );
    }
}


class Server
{
    /**
     * @param string[] $ips
     * @param \ShockMedia\Generated\Servers\ServerPackage[]|null $packages
     * @param \ShockMedia\Generated\Servers\TriggerInfo[]|null $zabbixTriggers
     * @param \ShockMedia\Generated\Servers\ItemInfo[]|null $zabbixGraphItems
     * @param \ShockMedia\Generated\Servers\BackupJob[] $backupJobs
     */
    public function __construct
    (
        public readonly string $fqdn,
        public readonly \ShockMedia\Generated\Servers\ServerType $type,
        public readonly \ShockMedia\Generated\Servers\AdminLevel $adminLevel,
        public readonly array $ips,
        public readonly string|null $slaRemarks,
        public readonly string|null $slaName,
        public readonly string|null $datacenter,
        public readonly string|null $cloudName,
        public readonly string $os,
        public readonly array|null $packages,
        public readonly bool $monitored,
        public readonly array|null $zabbixTriggers,
        public readonly array|null $zabbixGraphItems,
        public readonly \ShockMedia\Generated\Servers\BackupPlanSummary $backupPlanSummary,
        public readonly array $backupJobs,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $fqdn */
        $fqdn = $decodedJson['fqdn'];

        $type = \ShockMedia\Generated\Servers\ServerType::from($decodedJson['type']);

        $adminLevel = \ShockMedia\Generated\Servers\AdminLevel::from($decodedJson['adminLevel']);

        $var0 = array();
        foreach ($decodedJson['ips'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $ips */
        $ips = $var0;

        /** @var string|null $slaRemarks */
        $slaRemarks = $decodedJson['slaRemarks'];

        /** @var string|null $slaName */
        $slaName = $decodedJson['slaName'];

        /** @var string|null $datacenter */
        $datacenter = $decodedJson['datacenter'];

        /** @var string|null $cloudName */
        $cloudName = $decodedJson['cloudName'];

        /** @var string $os */
        $os = $decodedJson['os'];

        if ($decodedJson['packages'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['packages'] as $element0) {
                $var0[] = \ShockMedia\Generated\Servers\ServerPackage::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Servers\ServerPackage[]|null $packages */
        $packages = $var0;

        /** @var bool $monitored */
        $monitored = $decodedJson['monitored'];

        if ($decodedJson['zabbixTriggers'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['zabbixTriggers'] as $element0) {
                $var0[] = \ShockMedia\Generated\Servers\TriggerInfo::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Servers\TriggerInfo[]|null $zabbixTriggers */
        $zabbixTriggers = $var0;

        if ($decodedJson['zabbixGraphItems'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['zabbixGraphItems'] as $element0) {
                $var0[] = \ShockMedia\Generated\Servers\ItemInfo::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Servers\ItemInfo[]|null $zabbixGraphItems */
        $zabbixGraphItems = $var0;

        $backupPlanSummary = \ShockMedia\Generated\Servers\BackupPlanSummary::fromDecodedJson($decodedJson['backupPlanSummary']);

        $var0 = array();
        foreach ($decodedJson['backupJobs'] as $element0) {
            $var0[] = \ShockMedia\Generated\Servers\BackupJob::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Servers\BackupJob[] $backupJobs */
        $backupJobs = $var0;

        return new Server
        (
            $fqdn, $type, $adminLevel, $ips, $slaRemarks, $slaName, $datacenter, $cloudName, $os, $packages, $monitored, $zabbixTriggers, $zabbixGraphItems, $backupPlanSummary, $backupJobs
        );
    }
}


class ServerStatistics
{
    public function __construct
    (
        public readonly int $serverId,
        public readonly string|null $archiveResolution,
        public readonly int $serverTypeId,
        public readonly string|null $recentResolution,
        public readonly string $serverName,
        public readonly string|null $aggregateResolution,
        public readonly \ShockMedia\Generated\Stats\TimeSeriesChartData $chartData,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $serverId */
        $serverId = $decodedJson['serverId'];

        /** @var string|null $archiveResolution */
        $archiveResolution = $decodedJson['archiveResolution'];

        /** @var int $serverTypeId */
        $serverTypeId = $decodedJson['serverTypeId'];

        /** @var string|null $recentResolution */
        $recentResolution = $decodedJson['recentResolution'];

        /** @var string $serverName */
        $serverName = $decodedJson['serverName'];

        /** @var string|null $aggregateResolution */
        $aggregateResolution = $decodedJson['aggregateResolution'];

        $chartData = \ShockMedia\Generated\Stats\TimeSeriesChartData::fromDecodedJson($decodedJson['chartData']);

        return new ServerStatistics
        (
            $serverId, $archiveResolution, $serverTypeId, $recentResolution, $serverName, $aggregateResolution, $chartData
        );
    }
}


class BackupPlan
{
    public function __construct
    (
        public readonly string $name,
        public readonly int $yield,
        public readonly bool $customerWide,
        public readonly bool $included,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var int $yield */
        $yield = $decodedJson['yield'];

        /** @var bool $customerWide */
        $customerWide = $decodedJson['customerWide'];

        /** @var bool $included */
        $included = $decodedJson['included'];

        return new BackupPlan
        (
            $name, $yield, $customerWide, $included
        );
    }
}


class ZabbixOnlineCheck
{
    public function __construct
    (
        public readonly string $fqdn,
        public readonly bool $online,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $fqdn */
        $fqdn = $decodedJson['fqdn'];

        /** @var bool $online */
        $online = $decodedJson['online'];

        return new ZabbixOnlineCheck
        (
            $fqdn, $online
        );
    }
}


class VirtualMachineInfo
{
    /**
     * @param \ShockMedia\Generated\Servers\StatsData[] $stats
     * @param \ShockMedia\Generated\Servers\VirtualMachineHddInfo[] $disks
     */
    public function __construct
    (
        public readonly string $status,
        public readonly int|null $cpuCores,
        public readonly int $customerId,
        public readonly int|null $memory,
        public readonly array $stats,
        public readonly array $disks,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $status */
        $status = $decodedJson['status'];

        /** @var int|null $cpuCores */
        $cpuCores = $decodedJson['cpuCores'];

        /** @var int $customerId */
        $customerId = $decodedJson['customerId'];

        /** @var int|null $memory */
        $memory = $decodedJson['memory'];

        $var0 = array();
        foreach ($decodedJson['stats'] as $element0) {
            $var0[] = \ShockMedia\Generated\Servers\StatsData::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Servers\StatsData[] $stats */
        $stats = $var0;

        $var0 = array();
        foreach ($decodedJson['disks'] as $element0) {
            $var0[] = \ShockMedia\Generated\Servers\VirtualMachineHddInfo::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Servers\VirtualMachineHddInfo[] $disks */
        $disks = $var0;

        return new VirtualMachineInfo
        (
            $status, $cpuCores, $customerId, $memory, $stats, $disks
        );
    }
}


class ItemHistory
{
    /**
     * @param \ShockMedia\Generated\Stats\TimedMetric[] $history
     * @param \ShockMedia\Generated\Stats\TimedMetric[] $avgTrend
     */
    public function __construct
    (
        public readonly string $itemid,
        public readonly array $history,
        public readonly array $avgTrend,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $itemid */
        $itemid = $decodedJson['itemid'];

        $var0 = array();
        foreach ($decodedJson['history'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\TimedMetric::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\TimedMetric[] $history */
        $history = $var0;

        $var0 = array();
        foreach ($decodedJson['avgTrend'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\TimedMetric::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\TimedMetric[] $avgTrend */
        $avgTrend = $var0;

        return new ItemHistory
        (
            $itemid, $history, $avgTrend
        );
    }
}


enum AdminLevel: string
{
    case none = 'none';
    case hardware = 'hardware';
    case software = 'software';
    case hardware_software = 'hardware_software';
    case hardware_nbd = 'hardware_nbd';
}


class MaintenanceInfo
{
    public function __construct
    (
        public readonly int $id,
        public readonly string|null $applicationName,
        public readonly string $name,
        public readonly string $from,
        public readonly string $till,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string|null $applicationName */
        $applicationName = $decodedJson['applicationName'];

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string $from */
        $from = $decodedJson['from'];

        /** @var string $till */
        $till = $decodedJson['till'];

        return new MaintenanceInfo
        (
            $id, $applicationName, $name, $from, $till
        );
    }
}


class ItemInfo
{
    /**
     * @param \ShockMedia\Generated\Servers\ItemInfo\Graph[] $graphs
     */
    public function __construct
    (
        public readonly string $itemid,
        public readonly string $key,
        public readonly string $name,
        public readonly string $lastUpdated,
        public readonly \ShockMedia\Generated\Servers\ItemInfo\ValueType $valueType,
        public readonly string $unit,
        public readonly array $graphs,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $itemid */
        $itemid = $decodedJson['itemid'];

        /** @var string $key */
        $key = $decodedJson['key'];

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string $lastUpdated */
        $lastUpdated = $decodedJson['lastUpdated'];

        $valueType = \ShockMedia\Generated\Servers\ItemInfo\ValueType::from($decodedJson['valueType']);

        /** @var string $unit */
        $unit = $decodedJson['unit'];

        $var0 = array();
        foreach ($decodedJson['graphs'] as $element0) {
            $var0[] = \ShockMedia\Generated\Servers\ItemInfo\Graph::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Servers\ItemInfo\Graph[] $graphs */
        $graphs = $var0;

        return new ItemInfo
        (
            $itemid, $key, $name, $lastUpdated, $valueType, $unit, $graphs
        );
    }
}


class ServerFilter
{
    public function __construct
    (
        public readonly string|null $fqdnContains,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $fqdnContains */
        $fqdnContains = $decodedJson['fqdnContains'];

        return new ServerFilter
        (
            $fqdnContains
        );
    }
}


class LgResourceState
{
    public function __construct
    (
        public readonly string $fqdn,
        public readonly bool $virtualMachine,
        public readonly bool $node,
        public readonly string $status,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $fqdn */
        $fqdn = $decodedJson['fqdn'];

        /** @var bool $virtualMachine */
        $virtualMachine = $decodedJson['virtualMachine'];

        /** @var bool $node */
        $node = $decodedJson['node'];

        /** @var string $status */
        $status = $decodedJson['status'];

        return new LgResourceState
        (
            $fqdn, $virtualMachine, $node, $status
        );
    }
}


class ServerPackage
{
    public function __construct
    (
        public readonly string $type,
        public readonly string $description,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $type */
        $type = $decodedJson['type'];

        /** @var string $description */
        $description = $decodedJson['description'];

        return new ServerPackage
        (
            $type, $description
        );
    }
}


class StatsData
{
    /**
     * @param string[] $datasourceNames
     * @param string[] $timestamps
     * @param (array{int|null,float|null[]})[] $values
     */
    public function __construct
    (
        public readonly string $statisticType,
        public readonly array $datasourceNames,
        public readonly array $timestamps,
        public readonly array $values,
        public readonly string|null $key,
        public readonly string $machineKey,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $statisticType */
        $statisticType = $decodedJson['statisticType'];

        $var0 = array();
        foreach ($decodedJson['datasourceNames'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $datasourceNames */
        $datasourceNames = $var0;

        $var0 = array();
        foreach ($decodedJson['timestamps'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $timestamps */
        $timestamps = $var0;

        $var0 = array();
        foreach ($decodedJson['values'] as $element0) {
            $var1 = array();
            $var1[] = $element0[0];
            $var2 = array();
            foreach ($element0[1] as $element2) {
                $var2[] = $element2;
            }
            $var1[] = $var2;
            $var0[] = $var1;
        }
        /** @var (array{int|null,float|null[]})[] $values */
        $values = $var0;

        /** @var string|null $key */
        $key = $decodedJson['key'];

        /** @var string $machineKey */
        $machineKey = $decodedJson['machineKey'];

        return new StatsData
        (
            $statisticType, $datasourceNames, $timestamps, $values, $key, $machineKey
        );
    }
}


class FetchedHistory
{
    /**
     * @param \ShockMedia\Generated\Servers\ItemHistory[] $processed
     * @param \ShockMedia\Generated\Servers\ItemHistory[] $raw
     */
    public function __construct
    (
        public readonly array $processed,
        public readonly array $raw,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $var0 = array();
        foreach ($decodedJson['processed'] as $element0) {
            $var0[] = \ShockMedia\Generated\Servers\ItemHistory::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Servers\ItemHistory[] $processed */
        $processed = $var0;

        $var0 = array();
        foreach ($decodedJson['raw'] as $element0) {
            $var0[] = \ShockMedia\Generated\Servers\ItemHistory::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Servers\ItemHistory[] $raw */
        $raw = $var0;

        return new FetchedHistory
        (
            $processed, $raw
        );
    }
}


enum TriggerPriority: string
{
    case not_classified = 'not_classified';
    case information = 'information';
    case warning = 'warning';
    case average = 'average';
    case high = 'high';
    case disaster = 'disaster';
}


enum ServerType: string
{
    case webhosting = 'webhosting';
    case colocation = 'colocation';
    case dedication = 'dedication';
    case stockpile = 'stockpile';
    case miscellaneous = 'miscellaneous';
    case dedicated_firewall = 'dedicated_firewall';
    case external_server = 'external_server';
    case cloud_server = 'cloud_server';
    case managed_switch = 'managed_switch';
    case network_uplink = 'network_uplink';
    case cloud_node = 'cloud_node';
    case ipmi = 'ipmi';
    case workstation = 'workstation';
    case reseller_hosting = 'reseller_hosting';
    case external_server_aws = 'external_server_aws';
}


class ServerSummary
{
    /**
     * @param string[]|null $ips
     */
    public function __construct
    (
        public readonly string $fqdn,
        public readonly \ShockMedia\Generated\Servers\ServerType $type,
        public readonly array|null $ips,
        public readonly string|null $slaName,
        public readonly string|null $os,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $fqdn */
        $fqdn = $decodedJson['fqdn'];

        $type = \ShockMedia\Generated\Servers\ServerType::from($decodedJson['type']);

        if ($decodedJson['ips'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['ips'] as $element0) {
                $var0[] = $element0;
            }
        }
        /** @var string[]|null $ips */
        $ips = $var0;

        /** @var string|null $slaName */
        $slaName = $decodedJson['slaName'];

        /** @var string|null $os */
        $os = $decodedJson['os'];

        return new ServerSummary
        (
            $fqdn, $type, $ips, $slaName, $os
        );
    }
}

namespace ShockMedia\Generated\Servers\ItemInfo;


enum ValueType: string
{
    case numeric_float = 'numeric_float';
    case character = 'character';
    case log = 'log';
    case numeric_unsigned = 'numeric_unsigned';
    case text = 'text';
    case binary = 'binary';
}

namespace ShockMedia\Generated\Servers\ItemInfo;


class Graph
{
    public function __construct
    (
        public readonly string $name,
        public readonly int $graphid,
        public readonly \ShockMedia\Generated\Servers\Graph\GraphType $graphtype,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var int $graphid */
        $graphid = $decodedJson['graphid'];

        $graphtype = \ShockMedia\Generated\Servers\Graph\GraphType::from($decodedJson['graphtype']);

        return new Graph
        (
            $name, $graphid, $graphtype
        );
    }
}

namespace ShockMedia\Generated\Servers\Graph;


enum GraphType: string
{
    case normal = 'normal';
    case stacked = 'stacked';
    case pie = 'pie';
    case exploded = 'exploded';
}
namespace ShockMedia\Generated\Promotions;


class UpdatePromotionInput
{
    /**
     * @param (array{string,string,string})[]|null $message
     */
    public function __construct
    (
        public readonly int $id,
        public readonly string|null $icon,
        public readonly bool|null $active,
        public readonly array|null $message,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string|null $icon */
        $icon = $decodedJson['icon'];

        /** @var bool|null $active */
        $active = $decodedJson['active'];

        if ($decodedJson['message'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['message'] as $element0) {
                $var1 = array();
                $var1[] = $element0[0];
                $var1[] = $element0[1];
                $var1[] = $element0[2];
                $var0[] = $var1;
            }
        }
        /** @var (array{string,string,string})[]|null $message */
        $message = $var0;

        return new UpdatePromotionInput
        (
            $id, $icon, $active, $message
        );
    }
}


class Promotion
{
    /**
     * @param (array{string,string,string})[] $message
     */
    public function __construct
    (
        public readonly int $id,
        public readonly array $message,
        public readonly string $icon,
        public readonly bool $active,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        $var0 = array();
        foreach ($decodedJson['message'] as $element0) {
            $var1 = array();
            $var1[] = $element0[0];
            $var1[] = $element0[1];
            $var1[] = $element0[2];
            $var0[] = $var1;
        }
        /** @var (array{string,string,string})[] $message */
        $message = $var0;

        /** @var string $icon */
        $icon = $decodedJson['icon'];

        /** @var bool $active */
        $active = $decodedJson['active'];

        return new Promotion
        (
            $id, $message, $icon, $active
        );
    }
}


class PromotionFilter
{
    public function __construct
    (
        public readonly bool|null $showInactive,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var bool|null $showInactive */
        $showInactive = $decodedJson['showInactive'];

        return new PromotionFilter
        (
            $showInactive
        );
    }
}

namespace ShockMedia\Generated\Dnstemplates;


class TemplateUpdate
{
    public function __construct
    (
        public readonly int $id,
        public readonly string|null $name,
        public readonly string|null $description,
        public readonly \ShockMedia\Generated\Dnstemplates\TemplateUpdate\RecordAlt2|null $record,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string|null $name */
        $name = $decodedJson['name'];

        /** @var string|null $description */
        $description = $decodedJson['description'];

        if ($decodedJson['record'] === NULL) {
            $record = NULL;
        } else {
            $record = \ShockMedia\Generated\Dnstemplates\TemplateUpdate\RecordAlt2::fromDecodedJson($decodedJson['record']);
        }

        return new TemplateUpdate
        (
            $id, $name, $description, $record
        );
    }
}


class DnsTemplate
{
    /**
     * @param \ShockMedia\Generated\Dnstemplates\DnsTemplateRecord[] $records
     */
    public function __construct
    (
        public readonly int $id,
        public readonly string $description,
        public readonly bool $internal,
        public readonly array $records,
        public readonly string $name,
        public readonly int|null $customerId,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $description */
        $description = $decodedJson['description'];

        /** @var bool $internal */
        $internal = $decodedJson['internal'];

        $var0 = array();
        foreach ($decodedJson['records'] as $element0) {
            $var0[] = \ShockMedia\Generated\Dnstemplates\DnsTemplateRecord::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Dnstemplates\DnsTemplateRecord[] $records */
        $records = $var0;

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var int|null $customerId */
        $customerId = $decodedJson['customerId'];

        return new DnsTemplate
        (
            $id, $description, $internal, $records, $name, $customerId
        );
    }
}


class DnsTemplateRecord
{
    public function __construct
    (
        public readonly int $templateId,
        public readonly \ShockMedia\Generated\Domains\DnsRecordType $type,
        public readonly int $ttl,
        public readonly int $id,
        public readonly string $name,
        public readonly string $content,
        public readonly int|null $prio,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $templateId */
        $templateId = $decodedJson['templateId'];

        $type = \ShockMedia\Generated\Domains\DnsRecordType::from($decodedJson['type']);

        /** @var int $ttl */
        $ttl = $decodedJson['ttl'];

        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string $content */
        $content = $decodedJson['content'];

        /** @var int|null $prio */
        $prio = $decodedJson['prio'];

        return new DnsTemplateRecord
        (
            $templateId, $type, $ttl, $id, $name, $content, $prio
        );
    }
}


class DnsTemplateRecordInput
{
    public function __construct
    (
        public readonly string $name,
        public readonly \ShockMedia\Generated\Domains\EditableDnsRecordType $type,
        public readonly int $ttl,
        public readonly int|null $prio,
        public readonly string $content,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        $type = \ShockMedia\Generated\Domains\EditableDnsRecordType::from($decodedJson['type']);

        /** @var int $ttl */
        $ttl = $decodedJson['ttl'];

        /** @var int|null $prio */
        $prio = $decodedJson['prio'];

        /** @var string $content */
        $content = $decodedJson['content'];

        return new DnsTemplateRecordInput
        (
            $name, $type, $ttl, $prio, $content
        );
    }
}

namespace ShockMedia\Generated\Dnstemplates\TemplateUpdate;


class RecordAlt2
{
    public function __construct
    (
        public readonly int $id,
        public readonly string $name,
        public readonly \ShockMedia\Generated\Domains\EditableDnsRecordType $type,
        public readonly int $ttl,
        public readonly int|null $prio,
        public readonly string $content,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $name */
        $name = $decodedJson['name'];

        $type = \ShockMedia\Generated\Domains\EditableDnsRecordType::from($decodedJson['type']);

        /** @var int $ttl */
        $ttl = $decodedJson['ttl'];

        /** @var int|null $prio */
        $prio = $decodedJson['prio'];

        /** @var string $content */
        $content = $decodedJson['content'];

        return new RecordAlt2
        (
            $id, $name, $type, $ttl, $prio, $content
        );
    }
}
namespace ShockMedia\Generated\Containers;


class App
{
    public function __construct
    (
        public readonly string $appId,
        public readonly string $buildTemplate,
        public readonly string $description,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $appId */
        $appId = $decodedJson['appId'];

        /** @var string $buildTemplate */
        $buildTemplate = $decodedJson['buildTemplate'];

        /** @var string $description */
        $description = $decodedJson['description'];

        return new App
        (
            $appId, $buildTemplate, $description
        );
    }
}


class Project
{
    /**
     * @param \ShockMedia\Generated\Containers\App[]|null $apps
     */
    public function __construct
    (
        public readonly string $projectId,
        public readonly string $description,
        public readonly string|null $sla,
        public readonly array|null $apps,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $projectId */
        $projectId = $decodedJson['projectId'];

        /** @var string $description */
        $description = $decodedJson['description'];

        /** @var string|null $sla */
        $sla = $decodedJson['sla'];

        if ($decodedJson['apps'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['apps'] as $element0) {
                $var0[] = \ShockMedia\Generated\Containers\App::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Containers\App[]|null $apps */
        $apps = $var0;

        return new Project
        (
            $projectId, $description, $sla, $apps
        );
    }
}

namespace ShockMedia\Generated\Orders;


class Task
{
    public function __construct
    (
        public readonly int $id,
        public readonly string $title,
        public readonly string $description,
        public readonly bool $notify,
        public readonly string|null $start,
        public readonly string|null $end,
        public readonly bool $customerResponsible,
        public readonly \ShockMedia\Generated\Orders\Status $status,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $title */
        $title = $decodedJson['title'];

        /** @var string $description */
        $description = $decodedJson['description'];

        /** @var bool $notify */
        $notify = $decodedJson['notify'];

        /** @var string|null $start */
        $start = $decodedJson['start'];

        /** @var string|null $end */
        $end = $decodedJson['end'];

        /** @var bool $customerResponsible */
        $customerResponsible = $decodedJson['customerResponsible'];

        $status = \ShockMedia\Generated\Orders\Status::from($decodedJson['status']);

        return new Task
        (
            $id, $title, $description, $notify, $start, $end, $customerResponsible, $status
        );
    }
}


class Order
{
    /**
     * @param \ShockMedia\Generated\Orders\Task[] $tasks
     */
    public function __construct
    (
        public readonly int $id,
        public readonly string $title,
        public readonly string|null $start,
        public readonly string|null $end,
        public readonly string|null $deadline,
        public readonly bool $delivered,
        public readonly bool $hasCustomerResponsibility,
        public readonly array $tasks,
        public readonly \ShockMedia\Generated\Orders\Order\OrderType $orderType,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $title */
        $title = $decodedJson['title'];

        /** @var string|null $start */
        $start = $decodedJson['start'];

        /** @var string|null $end */
        $end = $decodedJson['end'];

        /** @var string|null $deadline */
        $deadline = $decodedJson['deadline'];

        /** @var bool $delivered */
        $delivered = $decodedJson['delivered'];

        /** @var bool $hasCustomerResponsibility */
        $hasCustomerResponsibility = $decodedJson['hasCustomerResponsibility'];

        $var0 = array();
        foreach ($decodedJson['tasks'] as $element0) {
            $var0[] = \ShockMedia\Generated\Orders\Task::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Orders\Task[] $tasks */
        $tasks = $var0;

        $orderType = \ShockMedia\Generated\Orders\Order\OrderType::from($decodedJson['orderType']);

        return new Order
        (
            $id, $title, $start, $end, $deadline, $delivered, $hasCustomerResponsibility, $tasks, $orderType
        );
    }
}


enum Status: string
{
    case not_started = 'not_started';
    case started = 'started';
    case completed = 'completed';
    case customer = 'customer';
}


class OrderFilter
{
    public function __construct
    (
        public readonly bool|null $showDelivered,
        public readonly bool|null $showDrs,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var bool|null $showDelivered */
        $showDelivered = $decodedJson['showDelivered'];

        /** @var bool|null $showDrs */
        $showDrs = $decodedJson['showDrs'];

        return new OrderFilter
        (
            $showDelivered, $showDrs
        );
    }
}

namespace ShockMedia\Generated\Orders\Order;


enum OrderType: string
{
    case DRS = 'DRS';
    case OTHER = 'OTHER';
}
namespace ShockMedia\Generated\Domainregistration;


class DomainRequest
{
    /**
     * @param \ShockMedia\Generated\Domainregistration\DomainRequest\Failure[] $failures
     */
    public function __construct
    (
        public readonly \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput $input,
        public readonly array $failures,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $input = \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput::fromDecodedJson($decodedJson['input']);

        $var0 = array();
        foreach ($decodedJson['failures'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\DomainRequest\Failure::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\DomainRequest\Failure[] $failures */
        $failures = $var0;

        return new DomainRequest
        (
            $input, $failures
        );
    }
}


class DomregInfoStep2
{
    /**
     * @param string[] $servers
     * @param \ShockMedia\Generated\Domainregistration\DomregInfoStep2\DnsTemplateRef[] $dnsTemplates
     * @param \ShockMedia\Generated\Domainregistration\DomregInfoStep2\HostingPlan[] $hostingPlans
     * @param \ShockMedia\Generated\Domainregistration\DomregInfoStep2\OfferingSpecification[] $specs
     */
    public function __construct
    (
        public readonly array $servers,
        public readonly array $dnsTemplates,
        public readonly array $hostingPlans,
        public readonly array $specs,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $var0 = array();
        foreach ($decodedJson['servers'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $servers */
        $servers = $var0;

        $var0 = array();
        foreach ($decodedJson['dnsTemplates'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\DomregInfoStep2\DnsTemplateRef::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\DomregInfoStep2\DnsTemplateRef[] $dnsTemplates */
        $dnsTemplates = $var0;

        $var0 = array();
        foreach ($decodedJson['hostingPlans'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\DomregInfoStep2\HostingPlan::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\DomregInfoStep2\HostingPlan[] $hostingPlans */
        $hostingPlans = $var0;

        $var0 = array();
        foreach ($decodedJson['specs'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\DomregInfoStep2\OfferingSpecification::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\DomregInfoStep2\OfferingSpecification[] $specs */
        $specs = $var0;

        return new DomregInfoStep2
        (
            $servers, $dnsTemplates, $hostingPlans, $specs
        );
    }
}


class DomainContact
{
    /**
     * @param \ShockMedia\Generated\Domainregistration\DomainContact\ExtraProperty[] $extraProperties
     * @param \ShockMedia\Generated\Domainregistration\DomainContact\Validation[] $validations
     */
    public function __construct
    (
        public readonly string $handle,
        public readonly string|null $organization,
        public readonly string $name,
        public readonly string $address,
        public readonly string $postalCode,
        public readonly string $city,
        public readonly string|null $state,
        public readonly string $country,
        public readonly string $email,
        public readonly string $telVoice,
        public readonly string|null $telFax,
        public readonly array $extraProperties,
        public readonly array $validations,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $handle */
        $handle = $decodedJson['handle'];

        /** @var string|null $organization */
        $organization = $decodedJson['organization'];

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string $address */
        $address = $decodedJson['address'];

        /** @var string $postalCode */
        $postalCode = $decodedJson['postalCode'];

        /** @var string $city */
        $city = $decodedJson['city'];

        /** @var string|null $state */
        $state = $decodedJson['state'];

        /** @var string $country */
        $country = $decodedJson['country'];

        /** @var string $email */
        $email = $decodedJson['email'];

        /** @var string $telVoice */
        $telVoice = $decodedJson['telVoice'];

        /** @var string|null $telFax */
        $telFax = $decodedJson['telFax'];

        $var0 = array();
        foreach ($decodedJson['extraProperties'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\DomainContact\ExtraProperty::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\DomainContact\ExtraProperty[] $extraProperties */
        $extraProperties = $var0;

        $var0 = array();
        foreach ($decodedJson['validations'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\DomainContact\Validation::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\DomainContact\Validation[] $validations */
        $validations = $var0;

        return new DomainContact
        (
            $handle, $organization, $name, $address, $postalCode, $city, $state, $country, $email, $telVoice, $telFax, $extraProperties, $validations
        );
    }
}


class CreateDomainContactInputSource
{
    /**
     * @param \ShockMedia\Generated\Domainregistration\RegistryProperties[]|null $registryProperties
     */
    public function __construct
    (
        public readonly string|null $organization,
        public readonly string|null $name,
        public readonly string|null $address,
        public readonly string|null $postalCode,
        public readonly string|null $city,
        public readonly string|null $state,
        public readonly string|null $country,
        public readonly string|null $email,
        public readonly string|null $telVoice,
        public readonly string|null $telFax,
        public readonly array|null $registryProperties,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $organization */
        $organization = $decodedJson['organization'];

        /** @var string|null $name */
        $name = $decodedJson['name'];

        /** @var string|null $address */
        $address = $decodedJson['address'];

        /** @var string|null $postalCode */
        $postalCode = $decodedJson['postalCode'];

        /** @var string|null $city */
        $city = $decodedJson['city'];

        /** @var string|null $state */
        $state = $decodedJson['state'];

        /** @var string|null $country */
        $country = $decodedJson['country'];

        /** @var string|null $email */
        $email = $decodedJson['email'];

        /** @var string|null $telVoice */
        $telVoice = $decodedJson['telVoice'];

        /** @var string|null $telFax */
        $telFax = $decodedJson['telFax'];

        if ($decodedJson['registryProperties'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['registryProperties'] as $element0) {
                $var0[] = \ShockMedia\Generated\Domainregistration\RegistryProperties::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Domainregistration\RegistryProperties[]|null $registryProperties */
        $registryProperties = $var0;

        return new CreateDomainContactInputSource
        (
            $organization, $name, $address, $postalCode, $city, $state, $country, $email, $telVoice, $telFax, $registryProperties
        );
    }
}


class DomregInfoStep0
{
    public function __construct
    (
        public readonly string $domain,
        public readonly \ShockMedia\Generated\Domainregistration\DomainCheckStatus|null $status,
        public readonly float $monthly,
        public readonly int $period,
        public readonly float|null $discountedMonthly,
        public readonly float $otherMax,
        public readonly \ShockMedia\Generated\Domainregistration\DomregInfoStep0\TransferInfo|null $transferInfo,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $domain */
        $domain = $decodedJson['domain'];

        if ($decodedJson['status'] === NULL) {
            $status = NULL;
        } else {
            $status = \ShockMedia\Generated\Domainregistration\DomainCheckStatus::from($decodedJson['status']);
        }

        /** @var float $monthly */
        $monthly = $decodedJson['monthly'];

        /** @var int $period */
        $period = $decodedJson['period'];

        /** @var float|null $discountedMonthly */
        $discountedMonthly = $decodedJson['discountedMonthly'];

        /** @var float $otherMax */
        $otherMax = $decodedJson['otherMax'];

        if ($decodedJson['transferInfo'] === NULL) {
            $transferInfo = NULL;
        } else {
            $transferInfo = \ShockMedia\Generated\Domainregistration\DomregInfoStep0\TransferInfo::fromDecodedJson($decodedJson['transferInfo']);
        }

        return new DomregInfoStep0
        (
            $domain, $status, $monthly, $period, $discountedMonthly, $otherMax, $transferInfo
        );
    }
}


class CreateDomainRequestContactInput
{
    /**
     * @param \ShockMedia\Generated\Domainregistration\CreateDomainRequestContactInput\RegistryProperty[]|null $registryProperties
     */
    public function __construct
    (
        public readonly \ShockMedia\Generated\Domainregistration\CreateDomainRequestContactInput\Role $role,
        public readonly string|null $organization,
        public readonly string $name,
        public readonly string $address,
        public readonly string $postalCode,
        public readonly string $city,
        public readonly string|null $state,
        public readonly string $country,
        public readonly string $email,
        public readonly string $telVoice,
        public readonly string|null $telFax,
        public readonly array|null $registryProperties,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $role = \ShockMedia\Generated\Domainregistration\CreateDomainRequestContactInput\Role::from($decodedJson['role']);

        /** @var string|null $organization */
        $organization = $decodedJson['organization'];

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string $address */
        $address = $decodedJson['address'];

        /** @var string $postalCode */
        $postalCode = $decodedJson['postalCode'];

        /** @var string $city */
        $city = $decodedJson['city'];

        /** @var string|null $state */
        $state = $decodedJson['state'];

        /** @var string $country */
        $country = $decodedJson['country'];

        /** @var string $email */
        $email = $decodedJson['email'];

        /** @var string $telVoice */
        $telVoice = $decodedJson['telVoice'];

        /** @var string|null $telFax */
        $telFax = $decodedJson['telFax'];

        if ($decodedJson['registryProperties'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['registryProperties'] as $element0) {
                $var0[] = \ShockMedia\Generated\Domainregistration\CreateDomainRequestContactInput\RegistryProperty::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Domainregistration\CreateDomainRequestContactInput\RegistryProperty[]|null $registryProperties */
        $registryProperties = $var0;

        return new CreateDomainRequestContactInput
        (
            $role, $organization, $name, $address, $postalCode, $city, $state, $country, $email, $telVoice, $telFax, $registryProperties
        );
    }
}


enum DomainCheckStatus: string
{
    case available = 'available';
    case not_available = 'not_available';
    case invalid = 'invalid';
    case error = 'error';
}


class CreateDomainRequestInput
{
    /**
     * @param \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\NameServer[]|null $nameServers
     * @param \ShockMedia\Generated\Domainregistration\CreateDomainRequestContactInput[]|null $contacts
     * @param \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\DnsRecord[]|null $dnsRecords
     * @param \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\AcceptedQuote[] $quotes
     */
    public function __construct
    (
        public readonly string|null $authCode,
        public readonly bool|null $foaRegistrant,
        public readonly bool|null $foaAdmin,
        public readonly string $domainName,
        public readonly string|null $reuseRegistrantHandle,
        public readonly string|null $reuseAdminHandle,
        public readonly \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\PlanType $planType,
        public readonly int|null $hostingPlanId,
        public readonly \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\NameserversType $nameserversType,
        public readonly \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\ConfigDomain $configDomain,
        public readonly string|null $serverName,
        public readonly int|null $dnsTemplateId,
        public readonly string|null $ipv4,
        public readonly string|null $ipv6,
        public readonly array|null $nameServers,
        public readonly array|null $contacts,
        public readonly array|null $dnsRecords,
        public readonly array $quotes,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $authCode */
        $authCode = $decodedJson['authCode'];

        /** @var bool|null $foaRegistrant */
        $foaRegistrant = $decodedJson['foaRegistrant'];

        /** @var bool|null $foaAdmin */
        $foaAdmin = $decodedJson['foaAdmin'];

        /** @var string $domainName */
        $domainName = $decodedJson['domainName'];

        /** @var string|null $reuseRegistrantHandle */
        $reuseRegistrantHandle = $decodedJson['reuseRegistrantHandle'];

        /** @var string|null $reuseAdminHandle */
        $reuseAdminHandle = $decodedJson['reuseAdminHandle'];

        $planType = \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\PlanType::from($decodedJson['planType']);

        /** @var int|null $hostingPlanId */
        $hostingPlanId = $decodedJson['hostingPlanId'];

        $nameserversType = \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\NameserversType::from($decodedJson['nameserversType']);

        $configDomain = \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\ConfigDomain::from($decodedJson['configDomain']);

        /** @var string|null $serverName */
        $serverName = $decodedJson['serverName'];

        /** @var int|null $dnsTemplateId */
        $dnsTemplateId = $decodedJson['dnsTemplateId'];

        /** @var string|null $ipv4 */
        $ipv4 = $decodedJson['ipv4'];

        /** @var string|null $ipv6 */
        $ipv6 = $decodedJson['ipv6'];

        if ($decodedJson['nameServers'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['nameServers'] as $element0) {
                $var0[] = \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\NameServer::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\NameServer[]|null $nameServers */
        $nameServers = $var0;

        if ($decodedJson['contacts'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['contacts'] as $element0) {
                $var0[] = \ShockMedia\Generated\Domainregistration\CreateDomainRequestContactInput::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Domainregistration\CreateDomainRequestContactInput[]|null $contacts */
        $contacts = $var0;

        if ($decodedJson['dnsRecords'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['dnsRecords'] as $element0) {
                $var0[] = \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\DnsRecord::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\DnsRecord[]|null $dnsRecords */
        $dnsRecords = $var0;

        $var0 = array();
        foreach ($decodedJson['quotes'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\AcceptedQuote::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\CreateDomainRequestInput\AcceptedQuote[] $quotes */
        $quotes = $var0;

        return new CreateDomainRequestInput
        (
            $authCode, $foaRegistrant, $foaAdmin, $domainName, $reuseRegistrantHandle, $reuseAdminHandle, $planType, $hostingPlanId, $nameserversType, $configDomain, $serverName, $dnsTemplateId, $ipv4, $ipv6, $nameServers, $contacts, $dnsRecords, $quotes
        );
    }
}


class RegistryProperties
{
    /**
     * @param \ShockMedia\Generated\Domainregistration\RegistryProperties\Property[] $props
     */
    public function __construct
    (
        public readonly string $registry,
        public readonly array $props,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $registry */
        $registry = $decodedJson['registry'];

        $var0 = array();
        foreach ($decodedJson['props'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\RegistryProperties\Property::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\RegistryProperties\Property[] $props */
        $props = $var0;

        return new RegistryProperties
        (
            $registry, $props
        );
    }
}


class DomregInfoStep1
{
    /**
     * @param \ShockMedia\Generated\Domainregistration\DomregInfoStep1\ContactProperty[] $contactProperties
     * @param \ShockMedia\Generated\Domainregistration\DomainContact[] $availableRegistrantContacts
     * @param \ShockMedia\Generated\Domainregistration\DomainContact[] $availableAdminContacts
     * @param \ShockMedia\Generated\Domainregistration\CreateDomainContactInputSource[] $contactInputSources
     */
    public function __construct
    (
        public readonly string $suffix,
        public readonly string $registry,
        public readonly array $contactProperties,
        public readonly int $minAdmin,
        public readonly int $maxAdmin,
        public readonly array $availableRegistrantContacts,
        public readonly array $availableAdminContacts,
        public readonly array $contactInputSources,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $suffix */
        $suffix = $decodedJson['suffix'];

        /** @var string $registry */
        $registry = $decodedJson['registry'];

        $var0 = array();
        foreach ($decodedJson['contactProperties'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\DomregInfoStep1\ContactProperty::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\DomregInfoStep1\ContactProperty[] $contactProperties */
        $contactProperties = $var0;

        /** @var int $minAdmin */
        $minAdmin = $decodedJson['minAdmin'];

        /** @var int $maxAdmin */
        $maxAdmin = $decodedJson['maxAdmin'];

        $var0 = array();
        foreach ($decodedJson['availableRegistrantContacts'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\DomainContact::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\DomainContact[] $availableRegistrantContacts */
        $availableRegistrantContacts = $var0;

        $var0 = array();
        foreach ($decodedJson['availableAdminContacts'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\DomainContact::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\DomainContact[] $availableAdminContacts */
        $availableAdminContacts = $var0;

        $var0 = array();
        foreach ($decodedJson['contactInputSources'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\CreateDomainContactInputSource::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\CreateDomainContactInputSource[] $contactInputSources */
        $contactInputSources = $var0;

        return new DomregInfoStep1
        (
            $suffix, $registry, $contactProperties, $minAdmin, $maxAdmin, $availableRegistrantContacts, $availableAdminContacts, $contactInputSources
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\DomregInfoStep1;


class ContactProperty
{
    public function __construct
    (
        public readonly string $name,
        public readonly string $label,
        public readonly string $description,
        public readonly \ShockMedia\Generated\Domainregistration\ContactProperty\ContactPropertyType $type,
        public readonly bool $mandatory,
        public readonly mixed $values,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string $label */
        $label = $decodedJson['label'];

        /** @var string $description */
        $description = $decodedJson['description'];

        $type = \ShockMedia\Generated\Domainregistration\ContactProperty\ContactPropertyType::from($decodedJson['type']);

        /** @var bool $mandatory */
        $mandatory = $decodedJson['mandatory'];

        /** @var mixed $values */
        $values = $decodedJson['values'];

        return new ContactProperty
        (
            $name, $label, $description, $type, $mandatory, $values
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\ContactProperty;


enum ContactPropertyType: string
{
    case String = 'String';
    case Date = 'Date';
    case Integer = 'Integer';
}

namespace ShockMedia\Generated\Domainregistration\RegistryProperties;


class Property
{
    public function __construct
    (
        public readonly string $name,
        public readonly string $value,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string $value */
        $value = $decodedJson['value'];

        return new Property
        (
            $name, $value
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\CreateDomainRequestInput;


enum PlanType: string
{
    case domreg = 'domreg';
    case hosting = 'hosting';
}

namespace ShockMedia\Generated\Domainregistration\CreateDomainRequestContactInput;


enum Role: string
{
    case registrant = 'registrant';
    case admin = 'admin';
}

namespace ShockMedia\Generated\Domainregistration\DomregInfoStep0;


class TransferInfo
{
    public function __construct
    (
        public readonly bool $authCodeSupported,
        public readonly bool $authCodeRequired,
        public readonly bool $requiresFOA,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var bool $authCodeSupported */
        $authCodeSupported = $decodedJson['authCodeSupported'];

        /** @var bool $authCodeRequired */
        $authCodeRequired = $decodedJson['authCodeRequired'];

        /** @var bool $requiresFOA */
        $requiresFOA = $decodedJson['requiresFOA'];

        return new TransferInfo
        (
            $authCodeSupported, $authCodeRequired, $requiresFOA
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\DomainContact;


class ExtraProperty
{
    public function __construct
    (
        public readonly string $registry,
        public readonly string $name,
        public readonly string $value,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $registry */
        $registry = $decodedJson['registry'];

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string $value */
        $value = $decodedJson['value'];

        return new ExtraProperty
        (
            $registry, $name, $value
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\DomregInfoStep2;


class DnsTemplateRef
{
    public function __construct
    (
        public readonly int $id,
        public readonly string $description,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $description */
        $description = $decodedJson['description'];

        return new DnsTemplateRef
        (
            $id, $description
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\DomainRequest;


class Failure
{
    public function __construct
    (
        public readonly int $id,
        public readonly mixed $details,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var mixed $details */
        $details = $decodedJson['details'];

        return new Failure
        (
            $id, $details
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\DomregInfoStep2;


class HostingPlan
{
    /**
     * @param \ShockMedia\Generated\Domainregistration\HostingPlan\OfferingSpecificationValue[] $specValues
     */
    public function __construct
    (
        public readonly int $id,
        public readonly \ShockMedia\Generated\Domainregistration\HostingPlan\HostingPlanType $type,
        public readonly string $name,
        public readonly float $monthly,
        public readonly float|null $discountedMonthly,
        public readonly array $specValues,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        $type = \ShockMedia\Generated\Domainregistration\HostingPlan\HostingPlanType::from($decodedJson['type']);

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var float $monthly */
        $monthly = $decodedJson['monthly'];

        /** @var float|null $discountedMonthly */
        $discountedMonthly = $decodedJson['discountedMonthly'];

        $var0 = array();
        foreach ($decodedJson['specValues'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domainregistration\HostingPlan\OfferingSpecificationValue::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domainregistration\HostingPlan\OfferingSpecificationValue[] $specValues */
        $specValues = $var0;

        return new HostingPlan
        (
            $id, $type, $name, $monthly, $discountedMonthly, $specValues
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\HostingPlan;


enum HostingPlanType: string
{
    case plan = 'plan';
    case product = 'product';
}

namespace ShockMedia\Generated\Domainregistration\HostingPlan;


class OfferingSpecificationValue
{
    public function __construct
    (
        public readonly string $name,
        public readonly mixed $value,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var mixed $value */
        $value = $decodedJson['value'];

        return new OfferingSpecificationValue
        (
            $name, $value
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\DomregInfoStep2;


class OfferingSpecification
{
    public function __construct
    (
        public readonly string $name,
        public readonly int $index,
        public readonly string|null $unit,
        public readonly bool $base2,
        public readonly \ShockMedia\Generated\Domainregistration\OfferingSpecification\OfferingSpecificationType $type,
        public readonly bool $single,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var int $index */
        $index = $decodedJson['index'];

        /** @var string|null $unit */
        $unit = $decodedJson['unit'];

        /** @var bool $base2 */
        $base2 = $decodedJson['base2'];

        $type = \ShockMedia\Generated\Domainregistration\OfferingSpecification\OfferingSpecificationType::from($decodedJson['type']);

        /** @var bool $single */
        $single = $decodedJson['single'];

        return new OfferingSpecification
        (
            $name, $index, $unit, $base2, $type, $single
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\OfferingSpecification;


enum OfferingSpecificationType: string
{
    case number = 'number';
    case string = 'string';
    case boolean = 'boolean';
}

namespace ShockMedia\Generated\Domainregistration\DomainContact;


class Validation
{
    public function __construct
    (
        public readonly string $category,
        public readonly int $version,
        public readonly string $validatedOn,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $category */
        $category = $decodedJson['category'];

        /** @var int $version */
        $version = $decodedJson['version'];

        /** @var string $validatedOn */
        $validatedOn = $decodedJson['validatedOn'];

        return new Validation
        (
            $category, $version, $validatedOn
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\CreateDomainRequestContactInput;


class_alias('ShockMedia\Generated\Domainregistration\DomainContact\ExtraProperty', 'RegistryProperty');

namespace ShockMedia\Generated\Domainregistration\CreateDomainRequestInput;


enum NameserversType: string
{
    case smbv = 'smbv';
    case my = 'my';
}

namespace ShockMedia\Generated\Domainregistration\CreateDomainRequestInput;


enum ConfigDomain: string
{
    case regpage = 'regpage';
    case server = 'server';
    case dnstpl = 'dnstpl';
}

namespace ShockMedia\Generated\Domainregistration\CreateDomainRequestInput;


class NameServer
{
    public function __construct
    (
        public readonly int $index,
        public readonly string $ns,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $index */
        $index = $decodedJson['index'];

        /** @var string $ns */
        $ns = $decodedJson['ns'];

        return new NameServer
        (
            $index, $ns
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\CreateDomainRequestInput;


class DnsRecord
{
    public function __construct
    (
        public readonly string $name,
        public readonly string $type,
        public readonly int|null $ttl,
        public readonly int|null $prio,
        public readonly string $content,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string $type */
        $type = $decodedJson['type'];

        /** @var int|null $ttl */
        $ttl = $decodedJson['ttl'];

        /** @var int|null $prio */
        $prio = $decodedJson['prio'];

        /** @var string $content */
        $content = $decodedJson['content'];

        return new DnsRecord
        (
            $name, $type, $ttl, $prio, $content
        );
    }
}

namespace ShockMedia\Generated\Domainregistration\CreateDomainRequestInput;


class AcceptedQuote
{
    public function __construct
    (
        public readonly float $monthly,
        public readonly int $period,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var float $monthly */
        $monthly = $decodedJson['monthly'];

        /** @var int $period */
        $period = $decodedJson['period'];

        return new AcceptedQuote
        (
            $monthly, $period
        );
    }
}
namespace ShockMedia\Generated\Domains;


class DnsRecordInput
{
    public function __construct
    (
        public readonly string $name,
        public readonly \ShockMedia\Generated\Domains\EditableDnsRecordType $type,
        public readonly int $ttl,
        public readonly string $content,
        public readonly int|null $prio,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        $type = \ShockMedia\Generated\Domains\EditableDnsRecordType::from($decodedJson['type']);

        /** @var int $ttl */
        $ttl = $decodedJson['ttl'];

        /** @var string $content */
        $content = $decodedJson['content'];

        /** @var int|null $prio */
        $prio = $decodedJson['prio'];

        return new DnsRecordInput
        (
            $name, $type, $ttl, $content, $prio
        );
    }
}


enum DnsRecordType: string
{
    case A = 'A';
    case AAAA = 'AAAA';
    case AFSDB = 'AFSDB';
    case ALIAS = 'ALIAS';
    case APL = 'APL';
    case CAA = 'CAA';
    case CDNSKEY = 'CDNSKEY';
    case CDS = 'CDS';
    case CERT = 'CERT';
    case CNAME = 'CNAME';
    case CSYNC = 'CSYNC';
    case DHCID = 'DHCID';
    case DLV = 'DLV';
    case DNAME = 'DNAME';
    case DNSKEY = 'DNSKEY';
    case DS = 'DS';
    case EUI48 = 'EUI48';
    case EUI64 = 'EUI64';
    case HINFO = 'HINFO';
    case HIP = 'HIP';
    case HTTPS = 'HTTPS';
    case IPSECKEY = 'IPSECKEY';
    case KEY = 'KEY';
    case KX = 'KX';
    case LOC = 'LOC';
    case MX = 'MX';
    case NAPTR = 'NAPTR';
    case NS = 'NS';
    case NSEC = 'NSEC';
    case NSEC3 = 'NSEC3';
    case NSEC3PARAM = 'NSEC3PARAM';
    case OPENPGPKEY = 'OPENPGPKEY';
    case PTR = 'PTR';
    case RP = 'RP';
    case RRSIG = 'RRSIG';
    case SIG = 'SIG';
    case SMIMEA = 'SMIMEA';
    case SOA = 'SOA';
    case SRV = 'SRV';
    case SSHFP = 'SSHFP';
    case SVCB = 'SVCB';
    case TA = 'TA';
    case TKEY = 'TKEY';
    case TLSA = 'TLSA';
    case TSIG = 'TSIG';
    case TXT = 'TXT';
    case URI = 'URI';
    case ZONEMD = 'ZONEMD';
}


class ValidationErrors
{
    /**
     * @param \ShockMedia\Generated\Domains\DnsErrorCode[] $zone
     * @param (array{int|null,\ShockMedia\Generated\Domains\DnsErrorCode})[] $records
     */
    public function __construct
    (
        public readonly array $zone,
        public readonly array $records,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $var0 = array();
        foreach ($decodedJson['zone'] as $element0) {
            $var0[] = \ShockMedia\Generated\Domains\DnsErrorCode::from($element0);
        }
        /** @var \ShockMedia\Generated\Domains\DnsErrorCode[] $zone */
        $zone = $var0;

        $var0 = array();
        foreach ($decodedJson['records'] as $element0) {
            $var1 = array();
            $var1[] = $element0[0];
            $var1[] = \ShockMedia\Generated\Domains\DnsErrorCode::from($element0[1]);
            $var0[] = $var1;
        }
        /** @var (array{int|null,\ShockMedia\Generated\Domains\DnsErrorCode})[] $records */
        $records = $var0;

        return new ValidationErrors
        (
            $zone, $records
        );
    }
}


class DomainFilter
{
    public function __construct
    (
        public readonly string|null $nameContains,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $nameContains */
        $nameContains = $decodedJson['nameContains'];

        return new DomainFilter
        (
            $nameContains
        );
    }
}


class Domain
{
    /**
     * @param \ShockMedia\Generated\Domains\DnsRecord[]|null $records
     */
    public function __construct
    (
        public readonly int|null $notifiedSerial,
        public readonly string|null $account,
        public readonly string $name,
        public readonly string|null $type,
        public readonly int|null $lastCheck,
        public readonly bool $hasHostingPackage,
        public readonly bool $hasDns,
        public readonly \ShockMedia\Generated\Webforwarding\WebForwardingState|null $webForwarding,
        public readonly array|null $records,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int|null $notifiedSerial */
        $notifiedSerial = $decodedJson['notifiedSerial'];

        /** @var string|null $account */
        $account = $decodedJson['account'];

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string|null $type */
        $type = $decodedJson['type'];

        /** @var int|null $lastCheck */
        $lastCheck = $decodedJson['lastCheck'];

        /** @var bool $hasHostingPackage */
        $hasHostingPackage = $decodedJson['hasHostingPackage'];

        /** @var bool $hasDns */
        $hasDns = $decodedJson['hasDns'];

        if ($decodedJson['webForwarding'] === NULL) {
            $webForwarding = NULL;
        } else {
            $webForwarding = \ShockMedia\Generated\Webforwarding\WebForwardingState::fromDecodedJson($decodedJson['webForwarding']);
        }

        if ($decodedJson['records'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['records'] as $element0) {
                $var0[] = \ShockMedia\Generated\Domains\DnsRecord::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Domains\DnsRecord[]|null $records */
        $records = $var0;

        return new Domain
        (
            $notifiedSerial, $account, $name, $type, $lastCheck, $hasHostingPackage, $hasDns, $webForwarding, $records
        );
    }
}


enum EditableDnsRecordType: string
{
    case A = 'A';
    case AAAA = 'AAAA';
    case CAA = 'CAA';
    case CNAME = 'CNAME';
    case MX = 'MX';
    case SRV = 'SRV';
    case TXT = 'TXT';
}


class DnsRecord
{
    public function __construct
    (
        public readonly int $id,
        public readonly bool $editable,
        public readonly string $domainName,
        public readonly string $name,
        public readonly \ShockMedia\Generated\Domains\DnsRecordType $type,
        public readonly int $ttl,
        public readonly string $content,
        public readonly int|null $prio,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var bool $editable */
        $editable = $decodedJson['editable'];

        /** @var string $domainName */
        $domainName = $decodedJson['domainName'];

        /** @var string $name */
        $name = $decodedJson['name'];

        $type = \ShockMedia\Generated\Domains\DnsRecordType::from($decodedJson['type']);

        /** @var int $ttl */
        $ttl = $decodedJson['ttl'];

        /** @var string $content */
        $content = $decodedJson['content'];

        /** @var int|null $prio */
        $prio = $decodedJson['prio'];

        return new DnsRecord
        (
            $id, $editable, $domainName, $name, $type, $ttl, $content, $prio
        );
    }
}


enum DnsErrorCode: string
{
    case MISSING_SOA_RECORD = 'MISSING_SOA_RECORD';
    case MISSING_NS_RECORD = 'MISSING_NS_RECORD';
    case CNAME_RECORD_EQUALS_ZONE = 'CNAME_RECORD_EQUALS_ZONE';
    case CNAME_RECORD_CLASH = 'CNAME_RECORD_CLASH';
    case INVALID_RECORD_NAME = 'INVALID_RECORD_NAME';
    case RECORD_NAME_NO_TWO_DOTS = 'RECORD_NAME_NO_TWO_DOTS';
    case LEADING_WHITESPACE_IN_CONTENT = 'LEADING_WHITESPACE_IN_CONTENT';
    case TRAILING_WHITESPACE_IN_CONTENT = 'TRAILING_WHITESPACE_IN_CONTENT';
    case IP_ADDRESS_NOT_ALLOWED = 'IP_ADDRESS_NOT_ALLOWED';
    case MISSING_CONTENT = 'MISSING_CONTENT';
    case INVALID_CONTENT = 'INVALID_CONTENT';
    case INVALID_SRV_CONTENT = 'INVALID_SRV_CONTENT';
    case INVALID_IPV4 = 'INVALID_IPV4';
    case INVALID_IPV6 = 'INVALID_IPV6';
    case INVALID_HOSTNAME = 'INVALID_HOSTNAME';
    case PRIORITY_NOT_ALLOWED = 'PRIORITY_NOT_ALLOWED';
    case MISSING_PRIORITY = 'MISSING_PRIORITY';
    case INVALID_PRIORITY = 'INVALID_PRIORITY';
    case UNKNOWN_RECORD_TYPE = 'UNKNOWN_RECORD_TYPE';
    case INVALID_TTL = 'INVALID_TTL';
    case MIXED_RRSET_TTL = 'MIXED_RRSET_TTL';
}

namespace ShockMedia\Generated\Customers;


class BillingPreferences
{
    public function __construct
    (
        public readonly \ShockMedia\Generated\Customers\PaymentMethod $paymentMethod,
        public readonly bool $autoUpgrade,
        public readonly \ShockMedia\Generated\Customers\BillingInterval $billingInterval,
        public readonly string|null $iban,
        public readonly string|null $internalReference,
        public readonly int|null $paymentTerm,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $paymentMethod = \ShockMedia\Generated\Customers\PaymentMethod::from($decodedJson['paymentMethod']);

        /** @var bool $autoUpgrade */
        $autoUpgrade = $decodedJson['autoUpgrade'];

        $billingInterval = \ShockMedia\Generated\Customers\BillingInterval::from($decodedJson['billingInterval']);

        /** @var string|null $iban */
        $iban = $decodedJson['iban'];

        /** @var string|null $internalReference */
        $internalReference = $decodedJson['internalReference'];

        /** @var int|null $paymentTerm */
        $paymentTerm = $decodedJson['paymentTerm'];

        return new BillingPreferences
        (
            $paymentMethod, $autoUpgrade, $billingInterval, $iban, $internalReference, $paymentTerm
        );
    }
}


class Customer
{
    public function __construct
    (
        public readonly int $customerId,
        public readonly string|null $companyName,
        public readonly string|null $firstName,
        public readonly string|null $lastName,
        public readonly \ShockMedia\Generated\Customers\CustomerSettings $settings,
        public readonly \ShockMedia\Generated\Customers\BillingPreferences $billing,
        public readonly \ShockMedia\Generated\Customers\Address $businessAddress,
        public readonly \ShockMedia\Generated\Customers\Address $postalAddress,
        public readonly string|null $affiliateCode,
        public readonly string|null $cocId,
        public readonly string|null $sidnResellerId,
        public readonly bool $partner,
        public readonly bool $magentoAllowNew,
        public readonly \ShockMedia\Generated\Customers\SecurityPreferences $securityPreferences,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $customerId */
        $customerId = $decodedJson['customerId'];

        /** @var string|null $companyName */
        $companyName = $decodedJson['companyName'];

        /** @var string|null $firstName */
        $firstName = $decodedJson['firstName'];

        /** @var string|null $lastName */
        $lastName = $decodedJson['lastName'];

        $settings = \ShockMedia\Generated\Customers\CustomerSettings::fromDecodedJson($decodedJson['settings']);

        $billing = \ShockMedia\Generated\Customers\BillingPreferences::fromDecodedJson($decodedJson['billing']);

        $businessAddress = \ShockMedia\Generated\Customers\Address::fromDecodedJson($decodedJson['businessAddress']);

        $postalAddress = \ShockMedia\Generated\Customers\Address::fromDecodedJson($decodedJson['postalAddress']);

        /** @var string|null $affiliateCode */
        $affiliateCode = $decodedJson['affiliateCode'];

        /** @var string|null $cocId */
        $cocId = $decodedJson['cocId'];

        /** @var string|null $sidnResellerId */
        $sidnResellerId = $decodedJson['sidnResellerId'];

        /** @var bool $partner */
        $partner = $decodedJson['partner'];

        /** @var bool $magentoAllowNew */
        $magentoAllowNew = $decodedJson['magentoAllowNew'];

        $securityPreferences = \ShockMedia\Generated\Customers\SecurityPreferences::fromDecodedJson($decodedJson['securityPreferences']);

        return new Customer
        (
            $customerId, $companyName, $firstName, $lastName, $settings, $billing, $businessAddress, $postalAddress, $affiliateCode, $cocId, $sidnResellerId, $partner, $magentoAllowNew, $securityPreferences
        );
    }
}


enum AuthenticatedLinkMode: string
{
    case enabled = 'enabled';
    case do_not_email = 'do_not_email';
    case disabled = 'disabled';
}


class Address
{
    public function __construct
    (
        public readonly string|null $streetName,
        public readonly string|null $houseNumber,
        public readonly string|null $postalCode,
        public readonly string|null $location,
        public readonly string|null $country,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $streetName */
        $streetName = $decodedJson['streetName'];

        /** @var string|null $houseNumber */
        $houseNumber = $decodedJson['houseNumber'];

        /** @var string|null $postalCode */
        $postalCode = $decodedJson['postalCode'];

        /** @var string|null $location */
        $location = $decodedJson['location'];

        /** @var string|null $country */
        $country = $decodedJson['country'];

        return new Address
        (
            $streetName, $houseNumber, $postalCode, $location, $country
        );
    }
}


class CustomerSettings
{
    public function __construct
    (
        public readonly \ShockMedia\Generated\Customers\InvoiceMethod $invoiceMethod,
        public readonly int $vat,
        public readonly \ShockMedia\Generated\Customers\AdministrationCosts $administrationCosts,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $invoiceMethod = \ShockMedia\Generated\Customers\InvoiceMethod::from($decodedJson['invoiceMethod']);

        /** @var int $vat */
        $vat = $decodedJson['vat'];

        $administrationCosts = \ShockMedia\Generated\Customers\AdministrationCosts::from($decodedJson['administrationCosts']);

        return new CustomerSettings
        (
            $invoiceMethod, $vat, $administrationCosts
        );
    }
}


enum AdministrationCosts: string
{
    case none = 'none';
    case normal = 'normal';
}


class SecurityPreferencesUpdate
{
    public function __construct
    (
        public readonly \ShockMedia\Generated\Customers\CorrespondenceByEmailMode|null $correspondenceByEmail,
        public readonly \ShockMedia\Generated\Customers\AuthenticatedLinkMode|null $authenticatedTicketLinks,
        public readonly \ShockMedia\Generated\Customers\SecurityPreferencesUpdate\AuthenticatedTicketLifetimeAlt2|null $authenticatedTicketLifetime,
        public readonly \ShockMedia\Generated\Customers\AuthenticatedLinkMode|null $authenticatedInvoiceLinks,
        public readonly string|null $authenticatedInvoiceLifetime,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        if ($decodedJson['correspondenceByEmail'] === NULL) {
            $correspondenceByEmail = NULL;
        } else {
            $correspondenceByEmail = \ShockMedia\Generated\Customers\CorrespondenceByEmailMode::from($decodedJson['correspondenceByEmail']);
        }

        if ($decodedJson['authenticatedTicketLinks'] === NULL) {
            $authenticatedTicketLinks = NULL;
        } else {
            $authenticatedTicketLinks = \ShockMedia\Generated\Customers\AuthenticatedLinkMode::from($decodedJson['authenticatedTicketLinks']);
        }

        if ($decodedJson['authenticatedTicketLifetime'] === NULL) {
            $authenticatedTicketLifetime = NULL;
        } else {
            $authenticatedTicketLifetime = \ShockMedia\Generated\Customers\SecurityPreferencesUpdate\AuthenticatedTicketLifetimeAlt2::fromDecodedJson($decodedJson['authenticatedTicketLifetime']);
        }

        if ($decodedJson['authenticatedInvoiceLinks'] === NULL) {
            $authenticatedInvoiceLinks = NULL;
        } else {
            $authenticatedInvoiceLinks = \ShockMedia\Generated\Customers\AuthenticatedLinkMode::from($decodedJson['authenticatedInvoiceLinks']);
        }

        /** @var string|null $authenticatedInvoiceLifetime */
        $authenticatedInvoiceLifetime = $decodedJson['authenticatedInvoiceLifetime'];

        return new SecurityPreferencesUpdate
        (
            $correspondenceByEmail, $authenticatedTicketLinks, $authenticatedTicketLifetime, $authenticatedInvoiceLinks, $authenticatedInvoiceLifetime
        );
    }
}


class CustomerUpdate
{
    public function __construct
    (
        public readonly \ShockMedia\Generated\Customers\Address|null $address,
        public readonly \ShockMedia\Generated\Customers\Address|null $postalAddress,
        public readonly string|null $iban,
        public readonly \ShockMedia\Generated\Customers\BillingInterval|null $billingInterval,
        public readonly \ShockMedia\Generated\Customers\PaymentMethod|null $paymentMethod,
        public readonly string|null $internalReference,
        public readonly bool|null $autoUpgrade,
        public readonly \ShockMedia\Generated\Customers\SecurityPreferencesUpdate|null $securityPreferences,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        if ($decodedJson['address'] === NULL) {
            $address = NULL;
        } else {
            $address = \ShockMedia\Generated\Customers\Address::fromDecodedJson($decodedJson['address']);
        }

        if ($decodedJson['postalAddress'] === NULL) {
            $postalAddress = NULL;
        } else {
            $postalAddress = \ShockMedia\Generated\Customers\Address::fromDecodedJson($decodedJson['postalAddress']);
        }

        /** @var string|null $iban */
        $iban = $decodedJson['iban'];

        if ($decodedJson['billingInterval'] === NULL) {
            $billingInterval = NULL;
        } else {
            $billingInterval = \ShockMedia\Generated\Customers\BillingInterval::from($decodedJson['billingInterval']);
        }

        if ($decodedJson['paymentMethod'] === NULL) {
            $paymentMethod = NULL;
        } else {
            $paymentMethod = \ShockMedia\Generated\Customers\PaymentMethod::from($decodedJson['paymentMethod']);
        }

        /** @var string|null $internalReference */
        $internalReference = $decodedJson['internalReference'];

        /** @var bool|null $autoUpgrade */
        $autoUpgrade = $decodedJson['autoUpgrade'];

        if ($decodedJson['securityPreferences'] === NULL) {
            $securityPreferences = NULL;
        } else {
            $securityPreferences = \ShockMedia\Generated\Customers\SecurityPreferencesUpdate::fromDecodedJson($decodedJson['securityPreferences']);
        }

        return new CustomerUpdate
        (
            $address, $postalAddress, $iban, $billingInterval, $paymentMethod, $internalReference, $autoUpgrade, $securityPreferences
        );
    }
}


enum InvoiceMethod: string
{
    case dont_send = 'dont_send';
    case post = 'post';
    case mail = 'mail';
    case post_mail = 'post_mail';
}


class SecurityPreferences
{
    public function __construct
    (
        public readonly string|null $lastChanged,
        public readonly \ShockMedia\Generated\Customers\CorrespondenceByEmailMode|null $correspondenceByEmail,
        public readonly \ShockMedia\Generated\Customers\AuthenticatedLinkMode|null $authenticatedTicketLinks,
        public readonly string|null $authenticatedTicketLifetime,
        public readonly \ShockMedia\Generated\Customers\AuthenticatedLinkMode|null $authenticatedInvoiceLinks,
        public readonly string|null $authenticatedInvoiceLifetime,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $lastChanged */
        $lastChanged = $decodedJson['lastChanged'];

        if ($decodedJson['correspondenceByEmail'] === NULL) {
            $correspondenceByEmail = NULL;
        } else {
            $correspondenceByEmail = \ShockMedia\Generated\Customers\CorrespondenceByEmailMode::from($decodedJson['correspondenceByEmail']);
        }

        if ($decodedJson['authenticatedTicketLinks'] === NULL) {
            $authenticatedTicketLinks = NULL;
        } else {
            $authenticatedTicketLinks = \ShockMedia\Generated\Customers\AuthenticatedLinkMode::from($decodedJson['authenticatedTicketLinks']);
        }

        /** @var string|null $authenticatedTicketLifetime */
        $authenticatedTicketLifetime = $decodedJson['authenticatedTicketLifetime'];

        if ($decodedJson['authenticatedInvoiceLinks'] === NULL) {
            $authenticatedInvoiceLinks = NULL;
        } else {
            $authenticatedInvoiceLinks = \ShockMedia\Generated\Customers\AuthenticatedLinkMode::from($decodedJson['authenticatedInvoiceLinks']);
        }

        /** @var string|null $authenticatedInvoiceLifetime */
        $authenticatedInvoiceLifetime = $decodedJson['authenticatedInvoiceLifetime'];

        return new SecurityPreferences
        (
            $lastChanged, $correspondenceByEmail, $authenticatedTicketLinks, $authenticatedTicketLifetime, $authenticatedInvoiceLinks, $authenticatedInvoiceLifetime
        );
    }
}


enum PaymentMethod: string
{
    case bank_transfer = 'bank_transfer';
    case direct_debit = 'direct_debit';
}


class CustomerSummary
{
    public function __construct
    (
        public readonly int $customerId,
        public readonly string|null $companyName,
        public readonly string|null $firstName,
        public readonly string|null $lastName,
        public readonly string|null $city,
        public readonly bool|null $canLoginAsAffiliate,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $customerId */
        $customerId = $decodedJson['customerId'];

        /** @var string|null $companyName */
        $companyName = $decodedJson['companyName'];

        /** @var string|null $firstName */
        $firstName = $decodedJson['firstName'];

        /** @var string|null $lastName */
        $lastName = $decodedJson['lastName'];

        /** @var string|null $city */
        $city = $decodedJson['city'];

        /** @var bool|null $canLoginAsAffiliate */
        $canLoginAsAffiliate = $decodedJson['canLoginAsAffiliate'];

        return new CustomerSummary
        (
            $customerId, $companyName, $firstName, $lastName, $city, $canLoginAsAffiliate
        );
    }
}


enum CorrespondenceByEmailMode: string
{
    case enabled = 'enabled';
    case disable_incoming = 'disable_incoming';
    case disabled = 'disabled';
}


enum BillingInterval: string
{
    case monthly = 'monthly';
    case quarterly = 'quarterly';
    case semiannually = 'semiannually';
    case annually = 'annually';
    case biennially = 'biennially';
}

namespace ShockMedia\Generated\Customers\SecurityPreferencesUpdate;


class AuthenticatedTicketLifetimeAlt2
{
    public function __construct
    (
        public readonly string|null $value,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $value */
        $value = $decodedJson['value'];

        return new AuthenticatedTicketLifetimeAlt2
        (
            $value
        );
    }
}
namespace ShockMedia\Generated\Stats;


class MetricMetadata
{
    public function __construct
    (
        public readonly string $metric,
        public readonly string|null $submetric,
        public readonly string|null $name,
        public readonly string|null $fullName,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $metric */
        $metric = $decodedJson['metric'];

        /** @var string|null $submetric */
        $submetric = $decodedJson['submetric'];

        /** @var string|null $name */
        $name = $decodedJson['name'];

        /** @var string|null $fullName */
        $fullName = $decodedJson['fullName'];

        return new MetricMetadata
        (
            $metric, $submetric, $name, $fullName
        );
    }
}


class TimedMetric
{
    public function __construct
    (
        public readonly string $time,
        public readonly float|null $value,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $time */
        $time = $decodedJson['time'];

        /** @var float|null $value */
        $value = $decodedJson['value'];

        return new TimedMetric
        (
            $time, $value
        );
    }
}


class NamedLabel
{
    public function __construct
    (
        public readonly string $name,
        public readonly string|null $value,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string|null $value */
        $value = $decodedJson['value'];

        return new NamedLabel
        (
            $name, $value
        );
    }
}


class TimeSeriesChartData
{
    /**
     * @param \ShockMedia\Generated\Stats\TimedMetrics[] $curveData
     * @param \ShockMedia\Generated\Stats\TimedMetrics[] $barData
     * @param \ShockMedia\Generated\Stats\TimedMetrics[] $pointData
     * @param \ShockMedia\Generated\Stats\NamedMetric[] $scaleData
     * @param \ShockMedia\Generated\Stats\NamedMetric[] $constants
     * @param \ShockMedia\Generated\Stats\NamedLabel[] $keyNames
     * @param \ShockMedia\Generated\Stats\NamedLabel[] $units
     * @param \ShockMedia\Generated\Stats\NamedLabel[] $titles
     * @param \ShockMedia\Generated\Stats\NamedLabel[] $descriptions
     * @param \ShockMedia\Generated\Stats\MetricMetadatas[] $fieldMetadata
     */
    public function __construct
    (
        public readonly array $curveData,
        public readonly array $barData,
        public readonly array $pointData,
        public readonly array $scaleData,
        public readonly array $constants,
        public readonly array $keyNames,
        public readonly array $units,
        public readonly array $titles,
        public readonly array $descriptions,
        public readonly array $fieldMetadata,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $var0 = array();
        foreach ($decodedJson['curveData'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\TimedMetrics::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\TimedMetrics[] $curveData */
        $curveData = $var0;

        $var0 = array();
        foreach ($decodedJson['barData'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\TimedMetrics::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\TimedMetrics[] $barData */
        $barData = $var0;

        $var0 = array();
        foreach ($decodedJson['pointData'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\TimedMetrics::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\TimedMetrics[] $pointData */
        $pointData = $var0;

        $var0 = array();
        foreach ($decodedJson['scaleData'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\NamedMetric::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\NamedMetric[] $scaleData */
        $scaleData = $var0;

        $var0 = array();
        foreach ($decodedJson['constants'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\NamedMetric::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\NamedMetric[] $constants */
        $constants = $var0;

        $var0 = array();
        foreach ($decodedJson['keyNames'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\NamedLabel::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\NamedLabel[] $keyNames */
        $keyNames = $var0;

        $var0 = array();
        foreach ($decodedJson['units'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\NamedLabel::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\NamedLabel[] $units */
        $units = $var0;

        $var0 = array();
        foreach ($decodedJson['titles'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\NamedLabel::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\NamedLabel[] $titles */
        $titles = $var0;

        $var0 = array();
        foreach ($decodedJson['descriptions'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\NamedLabel::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\NamedLabel[] $descriptions */
        $descriptions = $var0;

        $var0 = array();
        foreach ($decodedJson['fieldMetadata'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\MetricMetadatas::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\MetricMetadatas[] $fieldMetadata */
        $fieldMetadata = $var0;

        return new TimeSeriesChartData
        (
            $curveData, $barData, $pointData, $scaleData, $constants, $keyNames, $units, $titles, $descriptions, $fieldMetadata
        );
    }
}


class NamedMetric
{
    public function __construct
    (
        public readonly string $name,
        public readonly int|null $value,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var int|null $value */
        $value = $decodedJson['value'];

        return new NamedMetric
        (
            $name, $value
        );
    }
}


class MetricMetadatas
{
    public function __construct
    (
        public readonly string $key,
        public readonly \ShockMedia\Generated\Stats\MetricMetadata $metadata,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $key */
        $key = $decodedJson['key'];

        $metadata = \ShockMedia\Generated\Stats\MetricMetadata::fromDecodedJson($decodedJson['metadata']);

        return new MetricMetadatas
        (
            $key, $metadata
        );
    }
}


class TimedMetrics
{
    /**
     * @param \ShockMedia\Generated\Stats\TimedMetric[] $metrics
     */
    public function __construct
    (
        public readonly string $key,
        public readonly array $metrics,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $key */
        $key = $decodedJson['key'];

        $var0 = array();
        foreach ($decodedJson['metrics'] as $element0) {
            $var0[] = \ShockMedia\Generated\Stats\TimedMetric::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Stats\TimedMetric[] $metrics */
        $metrics = $var0;

        return new TimedMetrics
        (
            $key, $metrics
        );
    }
}

namespace ShockMedia\Generated\Map;


class Build
{
    public function __construct
    (
        public readonly string $id,
        public readonly string $appId,
        public readonly string|null $projectFilePath,
        public readonly string $uploadDate,
        public readonly string $latestBuildDate,
        public readonly \ShockMedia\Generated\Map\BuildState $buildState,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $id */
        $id = $decodedJson['id'];

        /** @var string $appId */
        $appId = $decodedJson['appId'];

        /** @var string|null $projectFilePath */
        $projectFilePath = $decodedJson['projectFilePath'];

        /** @var string $uploadDate */
        $uploadDate = $decodedJson['uploadDate'];

        /** @var string $latestBuildDate */
        $latestBuildDate = $decodedJson['latestBuildDate'];

        $buildState = \ShockMedia\Generated\Map\BuildState::from($decodedJson['buildState']);

        return new Build
        (
            $id, $appId, $projectFilePath, $uploadDate, $latestBuildDate, $buildState
        );
    }
}


class BuildTemplate
{
    public function __construct
    (
        public readonly int $id,
        public readonly string $name,
        public readonly string|null $description,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string|null $description */
        $description = $decodedJson['description'];

        return new BuildTemplate
        (
            $id, $name, $description
        );
    }
}


enum BuildState: string
{
    case NOT_STARTED = 'NOT_STARTED';
    case CREATING_BASE_IMAGE = 'CREATING_BASE_IMAGE';
    case AWAITING_BASE_IMAGE = 'AWAITING_BASE_IMAGE';
    case CREATING_APP_IMAGE = 'CREATING_APP_IMAGE';
    case AWAITING_APP_IMAGE = 'AWAITING_APP_IMAGE';
    case DEPLOYING = 'DEPLOYING';
    case FINISHED = 'FINISHED';
    case ERROR = 'ERROR';
}


class Cluster
{
    public function __construct
    (
        public readonly int $id,
        public readonly string $name,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $name */
        $name = $decodedJson['name'];

        return new Cluster
        (
            $id, $name
        );
    }
}


class Project
{
    public function __construct
    (
        public readonly string $id,
        public readonly string $name,
        public readonly string $description,
        public readonly \ShockMedia\Generated\Map\Cluster $cluster,
        public readonly int $appCount,
        public readonly string|null $sla,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $id */
        $id = $decodedJson['id'];

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string $description */
        $description = $decodedJson['description'];

        $cluster = \ShockMedia\Generated\Map\Cluster::fromDecodedJson($decodedJson['cluster']);

        /** @var int $appCount */
        $appCount = $decodedJson['appCount'];

        /** @var string|null $sla */
        $sla = $decodedJson['sla'];

        return new Project
        (
            $id, $name, $description, $cluster, $appCount, $sla
        );
    }
}


class App
{
    public function __construct
    (
        public readonly string $id,
        public readonly string $name,
        public readonly string|null $description,
        public readonly \ShockMedia\Generated\Map\Project|null $project,
        public readonly \ShockMedia\Generated\Map\Build|null $build,
        public readonly string|null $override,
        public readonly \ShockMedia\Generated\Map\BuildTemplate|null $buildTemplate,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $id */
        $id = $decodedJson['id'];

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string|null $description */
        $description = $decodedJson['description'];

        if ($decodedJson['project'] === NULL) {
            $project = NULL;
        } else {
            $project = \ShockMedia\Generated\Map\Project::fromDecodedJson($decodedJson['project']);
        }

        if ($decodedJson['build'] === NULL) {
            $build = NULL;
        } else {
            $build = \ShockMedia\Generated\Map\Build::fromDecodedJson($decodedJson['build']);
        }

        /** @var string|null $override */
        $override = $decodedJson['override'];

        if ($decodedJson['buildTemplate'] === NULL) {
            $buildTemplate = NULL;
        } else {
            $buildTemplate = \ShockMedia\Generated\Map\BuildTemplate::fromDecodedJson($decodedJson['buildTemplate']);
        }

        return new App
        (
            $id, $name, $description, $project, $build, $override, $buildTemplate
        );
    }
}


class BuildStatus
{
    public function __construct
    (
        public readonly int $id,
        public readonly string $appId,
        public readonly string $buildId,
        public readonly int $buildNumber,
        public readonly string $status,
        public readonly string $createdAt,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $appId */
        $appId = $decodedJson['appId'];

        /** @var string $buildId */
        $buildId = $decodedJson['buildId'];

        /** @var int $buildNumber */
        $buildNumber = $decodedJson['buildNumber'];

        /** @var string $status */
        $status = $decodedJson['status'];

        /** @var string $createdAt */
        $createdAt = $decodedJson['createdAt'];

        return new BuildStatus
        (
            $id, $appId, $buildId, $buildNumber, $status, $createdAt
        );
    }
}

namespace ShockMedia\Generated;


class SortField
{
    public function __construct
    (
        public readonly string|null $field,
        public readonly \ShockMedia\Generated\SortField\DirectionAlt2|null $direction,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $field */
        $field = $decodedJson['field'];

        if ($decodedJson['direction'] === NULL) {
            $direction = NULL;
        } else {
            $direction = \ShockMedia\Generated\SortField\DirectionAlt2::from($decodedJson['direction']);
        }

        return new SortField
        (
            $field, $direction
        );
    }
}


class PageResult
{
    public function __construct
    (
        public readonly int $total,
        public readonly int $filtered,
        public readonly int $count,
        public readonly int $skip,
        public readonly bool|null $filteredIsLimited,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $total */
        $total = $decodedJson['total'];

        /** @var int $filtered */
        $filtered = $decodedJson['filtered'];

        /** @var int $count */
        $count = $decodedJson['count'];

        /** @var int $skip */
        $skip = $decodedJson['skip'];

        /** @var bool|null $filteredIsLimited */
        $filteredIsLimited = $decodedJson['filteredIsLimited'];

        return new PageResult
        (
            $total, $filtered, $count, $skip, $filteredIsLimited
        );
    }
}


class PageRequest
{
    /**
     * @param \ShockMedia\Generated\SortField[]|null $sort
     */
    public function __construct
    (
        public readonly array|null $sort,
        public readonly int|null $skip,
        public readonly int|null $limit,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        if ($decodedJson['sort'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['sort'] as $element0) {
                $var0[] = \ShockMedia\Generated\SortField::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\SortField[]|null $sort */
        $sort = $var0;

        /** @var int|null $skip */
        $skip = $decodedJson['skip'];

        /** @var int|null $limit */
        $limit = $decodedJson['limit'];

        return new PageRequest
        (
            $sort, $skip, $limit
        );
    }
}


enum PeriodUnit: string
{
    case nanos = 'nanos';
    case micros = 'micros';
    case millis = 'millis';
    case seconds = 'seconds';
    case minutes = 'minutes';
    case hours = 'hours';
    case half_days = 'half_days';
    case days = 'days';
    case weeks = 'weeks';
    case months = 'months';
    case years = 'years';
    case decades = 'decades';
    case centuries = 'centuries';
    case millennia = 'millennia';
    case eras = 'eras';
    case forever = 'forever';
}


enum Language: string
{
    case nl = 'nl';
    case en = 'en';
}


enum RangeType: string
{
    case OPEN = 'OPEN';
    case CLOSED = 'CLOSED';
    case OPEN_CLOSED = 'OPEN_CLOSED';
    case CLOSED_OPEN = 'CLOSED_OPEN';
    case AT_LEAST = 'AT_LEAST';
    case GREATER_THAN = 'GREATER_THAN';
    case AT_MOST = 'AT_MOST';
    case LESS_THAN = 'LESS_THAN';
    case ALL = 'ALL';
}

namespace ShockMedia\Generated\SortField;


enum DirectionAlt2: string
{
    case ASC = 'ASC';
    case DESC = 'DESC';
}
namespace ShockMedia\Generated\Auth;


class AuthState
{
    /**
     * @param \ShockMedia\Generated\Auth\AuthFactor[] $factors
     */
    public function __construct
    (
        public readonly array $factors,
        public readonly \ShockMedia\Generated\Auth\AuthState\RequiredActionAlt2|null $requiredAction,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $var0 = array();
        foreach ($decodedJson['factors'] as $element0) {
            $var0[] = \ShockMedia\Generated\Auth\AuthFactor::from($element0);
        }
        /** @var \ShockMedia\Generated\Auth\AuthFactor[] $factors */
        $factors = $var0;

        if ($decodedJson['requiredAction'] === NULL) {
            $requiredAction = NULL;
        } else {
            $requiredAction = \ShockMedia\Generated\Auth\AuthState\RequiredActionAlt2::from($decodedJson['requiredAction']);
        }

        return new AuthState
        (
            $factors, $requiredAction
        );
    }
}


enum Permission: string
{
    case ACL_READ = 'ACL_READ';
    case ACL_MANAGE = 'ACL_MANAGE';
    case ACCOUNT_MANAGE = 'ACCOUNT_MANAGE';
    case ACCOUNT_PERMISSION_MANAGE = 'ACCOUNT_PERMISSION_MANAGE';
    case APITOKEN_READ = 'APITOKEN_READ';
    case APITOKEN_MANAGE = 'APITOKEN_MANAGE';
    case CUSTOMER_READ = 'CUSTOMER_READ';
    case CUSTOMER_UPDATE = 'CUSTOMER_UPDATE';
    case FINANCIALS_READ = 'FINANCIALS_READ';
    case SERVICE_MANAGE = 'SERVICE_MANAGE';
    case PARTNERPROGRAM_READ = 'PARTNERPROGRAM_READ';
    case CLAIM_CREATE = 'CLAIM_CREATE';
    case LEAD_CREATE = 'LEAD_CREATE';
    case ORDER_READ = 'ORDER_READ';
    case DNS_READ = 'DNS_READ';
    case DNS_UPDATE = 'DNS_UPDATE';
    case DRS_READ_TRANSFERTOKEN = 'DRS_READ_TRANSFERTOKEN';
    case DRS_CREATE = 'DRS_CREATE';
    case DNSTEMPLATE_READ = 'DNSTEMPLATE_READ';
    case DNSTEMPLATE_MANAGE = 'DNSTEMPLATE_MANAGE';
    case SERVER_READ = 'SERVER_READ';
    case SERVER_UPDATE = 'SERVER_UPDATE';
    case CONTAINER_READ = 'CONTAINER_READ';
    case CONTAINER_UPDATE = 'CONTAINER_UPDATE';
    case MAILHOSTING_READ = 'MAILHOSTING_READ';
    case MAILHOSTING_MANAGE = 'MAILHOSTING_MANAGE';
    case HOSTING_READ = 'HOSTING_READ';
    case HOSTING_MANAGE = 'HOSTING_MANAGE';
    case RESELLER_READ = 'RESELLER_READ';
    case RESELLER_MANAGE = 'RESELLER_MANAGE';
    case MAGENTO_READ = 'MAGENTO_READ';
    case MAGENTO_MANAGE = 'MAGENTO_MANAGE';
    case TICKET_READ_ADMINISTRATION = 'TICKET_READ_ADMINISTRATION';
    case TICKET_READ_SALES = 'TICKET_READ_SALES';
    case TICKET_READ_SECURITY = 'TICKET_READ_SECURITY';
    case TICKET_READ_SUPPORT = 'TICKET_READ_SUPPORT';
    case TICKET_VIEW_ONE_TIME_READ = 'TICKET_VIEW_ONE_TIME_READ';
    case TICKET_CREATE_REGULAR = 'TICKET_CREATE_REGULAR';
    case TICKET_HIGHLY_CONFIDENTIAL = 'TICKET_HIGHLY_CONFIDENTIAL';
    case TICKET_CREATE_HIGH_PRIORITY = 'TICKET_CREATE_HIGH_PRIORITY';
    case TICKET_REPLY = 'TICKET_REPLY';
    case AFFILIATE_READ = 'AFFILIATE_READ';
    case AFFILIATE_IMPERSONATE = 'AFFILIATE_IMPERSONATE';
    case AFFILIATE_MANAGE = 'AFFILIATE_MANAGE';
    case ANNOUNCEMENT_READ = 'ANNOUNCEMENT_READ';
    case ANNOUNCEMENT_MANAGE = 'ANNOUNCEMENT_MANAGE';
    case CHANGELOG_READ = 'CHANGELOG_READ';
    case INCIDENT_READ = 'INCIDENT_READ';
}


class AssociateAccount
{
    /**
     * @param string[] $permissions
     */
    public function __construct
    (
        public readonly int $id,
        public readonly string $username,
        public readonly array $permissions,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $username */
        $username = $decodedJson['username'];

        $var0 = array();
        foreach ($decodedJson['permissions'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $permissions */
        $permissions = $var0;

        return new AssociateAccount
        (
            $id, $username, $permissions
        );
    }
}


class ApiToken
{
    /**
     * @param \ShockMedia\Generated\Auth\Permission[] $permissions
     * @param string[]|null $ipWhitelist
     */
    public function __construct
    (
        public readonly int $id,
        public readonly string $name,
        public readonly string|null $expiryDate,
        public readonly array $permissions,
        public readonly array|null $ipWhitelist,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string|null $expiryDate */
        $expiryDate = $decodedJson['expiryDate'];

        $var0 = array();
        foreach ($decodedJson['permissions'] as $element0) {
            $var0[] = \ShockMedia\Generated\Auth\Permission::from($element0);
        }
        /** @var \ShockMedia\Generated\Auth\Permission[] $permissions */
        $permissions = $var0;

        if ($decodedJson['ipWhitelist'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['ipWhitelist'] as $element0) {
                $var0[] = $element0;
            }
        }
        /** @var string[]|null $ipWhitelist */
        $ipWhitelist = $var0;

        return new ApiToken
        (
            $id, $name, $expiryDate, $permissions, $ipWhitelist
        );
    }
}


class CurrentUserInfo
{
    /**
     * @param \ShockMedia\Generated\Auth\CurrentUserInfo\AccountTypesItem[] $accountTypes
     * @param string[] $emails
     * @param string[] $permissions
     */
    public function __construct
    (
        public readonly string $displayName,
        public readonly string|null $userName,
        public readonly array $accountTypes,
        public readonly array $emails,
        public readonly bool $otpFactorStatus,
        public readonly bool $otpFactorRecoveryCodesStatus,
        public readonly bool $otpFactorEmailFallbackStatus,
        public readonly array $permissions,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $displayName */
        $displayName = $decodedJson['displayName'];

        /** @var string|null $userName */
        $userName = $decodedJson['userName'];

        $var0 = array();
        foreach ($decodedJson['accountTypes'] as $element0) {
            $var0[] = \ShockMedia\Generated\Auth\CurrentUserInfo\AccountTypesItem::from($element0);
        }
        /** @var \ShockMedia\Generated\Auth\CurrentUserInfo\AccountTypesItem[] $accountTypes */
        $accountTypes = $var0;

        $var0 = array();
        foreach ($decodedJson['emails'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $emails */
        $emails = $var0;

        /** @var bool $otpFactorStatus */
        $otpFactorStatus = $decodedJson['otpFactorStatus'];

        /** @var bool $otpFactorRecoveryCodesStatus */
        $otpFactorRecoveryCodesStatus = $decodedJson['otpFactorRecoveryCodesStatus'];

        /** @var bool $otpFactorEmailFallbackStatus */
        $otpFactorEmailFallbackStatus = $decodedJson['otpFactorEmailFallbackStatus'];

        $var0 = array();
        foreach ($decodedJson['permissions'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $permissions */
        $permissions = $var0;

        return new CurrentUserInfo
        (
            $displayName, $userName, $accountTypes, $emails, $otpFactorStatus, $otpFactorRecoveryCodesStatus, $otpFactorEmailFallbackStatus, $permissions
        );
    }
}


class Session
{
    public function __construct
    (
        public readonly string $tokenHash,
        public readonly string|null $userAgent,
        public readonly string $expires,
        public readonly bool $isCurrent,
        public readonly string $account,
        public readonly int $customerId,
        public readonly int|null $shadowCustomerId,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $tokenHash */
        $tokenHash = $decodedJson['tokenHash'];

        /** @var string|null $userAgent */
        $userAgent = $decodedJson['userAgent'];

        /** @var string $expires */
        $expires = $decodedJson['expires'];

        /** @var bool $isCurrent */
        $isCurrent = $decodedJson['isCurrent'];

        /** @var string $account */
        $account = $decodedJson['account'];

        /** @var int $customerId */
        $customerId = $decodedJson['customerId'];

        /** @var int|null $shadowCustomerId */
        $shadowCustomerId = $decodedJson['shadowCustomerId'];

        return new Session
        (
            $tokenHash, $userAgent, $expires, $isCurrent, $account, $customerId, $shadowCustomerId
        );
    }
}


enum AuthFactor: string
{
    case USER_PASS = 'USER_PASS';
    case OTP = 'OTP';
}


class SessionFilter
{
    /**
     * @param array{\ShockMedia\Generated\RangeType,string|null,string|null}|null $expires
     */
    public function __construct
    (
        public readonly int|null $customerId,
        public readonly int|null $accountId,
        public readonly array|null $expires,
        public readonly int|null $shadowCustomerId,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int|null $customerId */
        $customerId = $decodedJson['customerId'];

        /** @var int|null $accountId */
        $accountId = $decodedJson['accountId'];

        if ($decodedJson['expires'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            $var0[] = \ShockMedia\Generated\RangeType::from($decodedJson['expires'][0]);
            $var0[] = $decodedJson['expires'][1];
            $var0[] = $decodedJson['expires'][2];
        }
        /** @var array{\ShockMedia\Generated\RangeType,string|null,string|null}|null $expires */
        $expires = $var0;

        /** @var int|null $shadowCustomerId */
        $shadowCustomerId = $decodedJson['shadowCustomerId'];

        return new SessionFilter
        (
            $customerId, $accountId, $expires, $shadowCustomerId
        );
    }
}


class MyShockAccounts
{
    public function __construct
    (
        public readonly string|null $token,
        public readonly \ShockMedia\Generated\Auth\ApiToken|null $apiToken,
        public readonly \ShockMedia\Generated\Auth\AssociateAccount|null $associate,
        public readonly \ShockMedia\Generated\Auth\Customer|null $customer,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $token */
        $token = $decodedJson['token'];

        if ($decodedJson['apiToken'] === NULL) {
            $apiToken = NULL;
        } else {
            $apiToken = \ShockMedia\Generated\Auth\ApiToken::fromDecodedJson($decodedJson['apiToken']);
        }

        if ($decodedJson['associate'] === NULL) {
            $associate = NULL;
        } else {
            $associate = \ShockMedia\Generated\Auth\AssociateAccount::fromDecodedJson($decodedJson['associate']);
        }

        if ($decodedJson['customer'] === NULL) {
            $customer = NULL;
        } else {
            $customer = \ShockMedia\Generated\Auth\Customer::fromDecodedJson($decodedJson['customer']);
        }

        return new MyShockAccounts
        (
            $token, $apiToken, $associate, $customer
        );
    }
}


class Customer
{
    public function __construct
    (
        public readonly int $customerId,
        public readonly bool $affiliate,
        public readonly \ShockMedia\Generated\Account\Account|null $myAccount,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $customerId */
        $customerId = $decodedJson['customerId'];

        /** @var bool $affiliate */
        $affiliate = $decodedJson['affiliate'];

        if ($decodedJson['myAccount'] === NULL) {
            $myAccount = NULL;
        } else {
            $myAccount = \ShockMedia\Generated\Account\Account::fromDecodedJson($decodedJson['myAccount']);
        }

        return new Customer
        (
            $customerId, $affiliate, $myAccount
        );
    }
}


class ApiTokenFilter
{
    /**
     * @param string[]|null $permissions
     */
    public function __construct
    (
        public readonly string|null $nameLike,
        public readonly array|null $permissions,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $nameLike */
        $nameLike = $decodedJson['nameLike'];

        if ($decodedJson['permissions'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['permissions'] as $element0) {
                $var0[] = $element0;
            }
        }
        /** @var string[]|null $permissions */
        $permissions = $var0;

        return new ApiTokenFilter
        (
            $nameLike, $permissions
        );
    }
}

namespace ShockMedia\Generated\Auth\CurrentUserInfo;


enum AccountTypesItem: string
{
    case CUSTOMER = 'CUSTOMER';
    case ASSOCIATE = 'ASSOCIATE';
    case AFFILIATE = 'AFFILIATE';
}

namespace ShockMedia\Generated\Auth\AuthState;


enum RequiredActionAlt2: string
{
    case additional_factor = 'additional_factor';
    case new_password = 'new_password';
}
namespace ShockMedia\Generated\Tickets;


class Service
{
    public function __construct
    (
        public readonly int $acquiredId,
        public readonly string|null $name,
        public readonly bool $hasSla,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $acquiredId */
        $acquiredId = $decodedJson['acquiredId'];

        /** @var string|null $name */
        $name = $decodedJson['name'];

        /** @var bool $hasSla */
        $hasSla = $decodedJson['hasSla'];

        return new Service
        (
            $acquiredId, $name, $hasSla
        );
    }
}


class AclAddress
{
    public function __construct
    (
        public readonly int $contactId,
        public readonly string|null $emailAddress,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $contactId */
        $contactId = $decodedJson['contactId'];

        /** @var string|null $emailAddress */
        $emailAddress = $decodedJson['emailAddress'];

        return new AclAddress
        (
            $contactId, $emailAddress
        );
    }
}


class MessageData
{
    /**
     * @param \ShockMedia\Generated\Tickets\Attachment[] $attachments
     */
    public function __construct
    (
        public readonly \ShockMedia\Generated\Tickets\MessageData\Content $content,
        public readonly array $attachments,
        public readonly string|null $attachmentTtl,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $content = \ShockMedia\Generated\Tickets\MessageData\Content::fromDecodedJson($decodedJson['content']);

        $var0 = array();
        foreach ($decodedJson['attachments'] as $element0) {
            $var0[] = \ShockMedia\Generated\Tickets\Attachment::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Tickets\Attachment[] $attachments */
        $attachments = $var0;

        /** @var string|null $attachmentTtl */
        $attachmentTtl = $decodedJson['attachmentTtl'];

        return new MessageData
        (
            $content, $attachments, $attachmentTtl
        );
    }
}


class TicketFilter
{
    /**
     * @param array{\ShockMedia\Generated\RangeType,string|null,string|null} $createdOn
     */
    public function __construct
    (
        public readonly string|null $phrase,
        public readonly \ShockMedia\Generated\Tickets\TicketState|null $state,
        public readonly string|null $department,
        public readonly array $createdOn,
        public readonly int|null $serviceId,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $phrase */
        $phrase = $decodedJson['phrase'];

        if ($decodedJson['state'] === NULL) {
            $state = NULL;
        } else {
            $state = \ShockMedia\Generated\Tickets\TicketState::from($decodedJson['state']);
        }

        /** @var string|null $department */
        $department = $decodedJson['department'];

        $var0 = array();
        $var0[] = \ShockMedia\Generated\RangeType::from($decodedJson['createdOn'][0]);
        $var0[] = $decodedJson['createdOn'][1];
        $var0[] = $decodedJson['createdOn'][2];
        /** @var array{\ShockMedia\Generated\RangeType,string|null,string|null} $createdOn */
        $createdOn = $var0;

        /** @var int|null $serviceId */
        $serviceId = $decodedJson['serviceId'];

        return new TicketFilter
        (
            $phrase, $state, $department, $createdOn, $serviceId
        );
    }
}


class Message
{
    /**
     * @param \ShockMedia\Generated\Tickets\Contact[] $senders
     * @param \ShockMedia\Generated\Tickets\Contact[] $receivers
     */
    public function __construct
    (
        public readonly int $id,
        public readonly string $dateTime,
        public readonly array $senders,
        public readonly array $receivers,
        public readonly \ShockMedia\Generated\Tickets\MessageData|null $data,
        public readonly string|null $actor,
        public readonly bool $oneTimeRead,
        public readonly bool $hasContents,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $dateTime */
        $dateTime = $decodedJson['dateTime'];

        $var0 = array();
        foreach ($decodedJson['senders'] as $element0) {
            $var0[] = \ShockMedia\Generated\Tickets\Contact::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Tickets\Contact[] $senders */
        $senders = $var0;

        $var0 = array();
        foreach ($decodedJson['receivers'] as $element0) {
            $var0[] = \ShockMedia\Generated\Tickets\Contact::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Tickets\Contact[] $receivers */
        $receivers = $var0;

        if ($decodedJson['data'] === NULL) {
            $data = NULL;
        } else {
            $data = \ShockMedia\Generated\Tickets\MessageData::fromDecodedJson($decodedJson['data']);
        }

        /** @var string|null $actor */
        $actor = $decodedJson['actor'];

        /** @var bool $oneTimeRead */
        $oneTimeRead = $decodedJson['oneTimeRead'];

        /** @var bool $hasContents */
        $hasContents = $decodedJson['hasContents'];

        return new Message
        (
            $id, $dateTime, $senders, $receivers, $data, $actor, $oneTimeRead, $hasContents
        );
    }
}


enum TicketState: string
{
    case open = 'open';
    case closed = 'closed';
    case scheduled = 'scheduled';
}


class CreateAttachmentInput
{
    public function __construct
    (
        public readonly int $id,
        public readonly string $authCode,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $authCode */
        $authCode = $decodedJson['authCode'];

        return new CreateAttachmentInput
        (
            $id, $authCode
        );
    }
}


class Sender
{
    public function __construct
    (
        public readonly string|null $name,
        public readonly string|null $emailAddress,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $name */
        $name = $decodedJson['name'];

        /** @var string|null $emailAddress */
        $emailAddress = $decodedJson['emailAddress'];

        return new Sender
        (
            $name, $emailAddress
        );
    }
}


class Ticket
{
    /**
     * @param \ShockMedia\Generated\Tickets\Contact[] $contacts
     * @param \ShockMedia\Generated\Tickets\Message[] $messages
     * @param (array{string,string})[] $replyContacts
     * @param array{int,string}|null $service
     */
    public function __construct
    (
        public readonly int $id,
        public readonly string|null $customerName,
        public readonly \ShockMedia\Generated\Tickets\TicketLinks|null $links,
        public readonly string|null $mailAuthCode,
        public readonly int $version,
        public readonly string|null $subject,
        public readonly string $createdAt,
        public readonly string $lastMessageAt,
        public readonly bool|null $canReply,
        public readonly array $contacts,
        public readonly string|null $department,
        public readonly string|null $departmentEmailAddress,
        public readonly bool $highlyConfidential,
        public readonly bool $highPriority,
        public readonly \ShockMedia\Generated\Tickets\TicketState $state,
        public readonly array $messages,
        public readonly array $replyContacts,
        public readonly array|null $service,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string|null $customerName */
        $customerName = $decodedJson['customerName'];

        if ($decodedJson['links'] === NULL) {
            $links = NULL;
        } else {
            $links = \ShockMedia\Generated\Tickets\TicketLinks::fromDecodedJson($decodedJson['links']);
        }

        /** @var string|null $mailAuthCode */
        $mailAuthCode = $decodedJson['mailAuthCode'];

        /** @var int $version */
        $version = $decodedJson['version'];

        /** @var string|null $subject */
        $subject = $decodedJson['subject'];

        /** @var string $createdAt */
        $createdAt = $decodedJson['createdAt'];

        /** @var string $lastMessageAt */
        $lastMessageAt = $decodedJson['lastMessageAt'];

        /** @var bool|null $canReply */
        $canReply = $decodedJson['canReply'];

        $var0 = array();
        foreach ($decodedJson['contacts'] as $element0) {
            $var0[] = \ShockMedia\Generated\Tickets\Contact::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Tickets\Contact[] $contacts */
        $contacts = $var0;

        /** @var string|null $department */
        $department = $decodedJson['department'];

        /** @var string|null $departmentEmailAddress */
        $departmentEmailAddress = $decodedJson['departmentEmailAddress'];

        /** @var bool $highlyConfidential */
        $highlyConfidential = $decodedJson['highlyConfidential'];

        /** @var bool $highPriority */
        $highPriority = $decodedJson['highPriority'];

        $state = \ShockMedia\Generated\Tickets\TicketState::from($decodedJson['state']);

        $var0 = array();
        foreach ($decodedJson['messages'] as $element0) {
            $var0[] = \ShockMedia\Generated\Tickets\Message::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Tickets\Message[] $messages */
        $messages = $var0;

        $var0 = array();
        foreach ($decodedJson['replyContacts'] as $element0) {
            $var1 = array();
            $var1[] = $element0[0];
            $var1[] = $element0[1];
            $var0[] = $var1;
        }
        /** @var (array{string,string})[] $replyContacts */
        $replyContacts = $var0;

        if ($decodedJson['service'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            $var0[] = $decodedJson['service'][0];
            $var0[] = $decodedJson['service'][1];
        }
        /** @var array{int,string}|null $service */
        $service = $var0;

        return new Ticket
        (
            $id, $customerName, $links, $mailAuthCode, $version, $subject, $createdAt, $lastMessageAt, $canReply, $contacts, $department, $departmentEmailAddress, $highlyConfidential, $highPriority, $state, $messages, $replyContacts, $service
        );
    }
}


class Contact
{
    public function __construct
    (
        public readonly string|null $name,
        public readonly string $emailAddress,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $name */
        $name = $decodedJson['name'];

        /** @var string $emailAddress */
        $emailAddress = $decodedJson['emailAddress'];

        return new Contact
        (
            $name, $emailAddress
        );
    }
}


class Attachment
{
    public function __construct
    (
        public readonly int $id,
        public readonly string|null $filename,
        public readonly string|null $contentType,
        public readonly string|null $contentId,
        public readonly string $createdAt,
        public readonly int $size,
        public readonly string|null $authCode,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string|null $filename */
        $filename = $decodedJson['filename'];

        /** @var string|null $contentType */
        $contentType = $decodedJson['contentType'];

        /** @var string|null $contentId */
        $contentId = $decodedJson['contentId'];

        /** @var string $createdAt */
        $createdAt = $decodedJson['createdAt'];

        /** @var int $size */
        $size = $decodedJson['size'];

        /** @var string|null $authCode */
        $authCode = $decodedJson['authCode'];

        return new Attachment
        (
            $id, $filename, $contentType, $contentId, $createdAt, $size, $authCode
        );
    }
}


class TicketLinks
{
    public function __construct
    (
        public readonly string|null $authenticatedLink,
        public readonly string|null $unauthenticatedLink,
        public readonly \ShockMedia\Generated\Tickets\TicketLinks\SurveyLinksAlt2|null $surveyLinks,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $authenticatedLink */
        $authenticatedLink = $decodedJson['authenticatedLink'];

        /** @var string|null $unauthenticatedLink */
        $unauthenticatedLink = $decodedJson['unauthenticatedLink'];

        if ($decodedJson['surveyLinks'] === NULL) {
            $surveyLinks = NULL;
        } else {
            $surveyLinks = \ShockMedia\Generated\Tickets\TicketLinks\SurveyLinksAlt2::fromDecodedJson($decodedJson['surveyLinks']);
        }

        return new TicketLinks
        (
            $authenticatedLink, $unauthenticatedLink, $surveyLinks
        );
    }
}

namespace ShockMedia\Generated\Tickets\TicketLinks;


class SurveyLinksAlt2
{
    public function __construct
    (
        public readonly string $positive,
        public readonly string $negative,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $positive */
        $positive = $decodedJson['positive'];

        /** @var string $negative */
        $negative = $decodedJson['negative'];

        return new SurveyLinksAlt2
        (
            $positive, $negative
        );
    }
}

namespace ShockMedia\Generated\Tickets\MessageData;


class Content
{
    public function __construct
    (
        public readonly string|null $plain,
        public readonly string|null $html,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $plain */
        $plain = $decodedJson['plain'];

        /** @var string|null $html */
        $html = $decodedJson['html'];

        return new Content
        (
            $plain, $html
        );
    }
}
namespace ShockMedia\Generated\Contacts;


class Contact
{
    /**
     * @param string|null[] $email
     * @param string|null[] $telephone
     * @param string|null[] $groups
     */
    public function __construct
    (
        public readonly int $id,
        public readonly \ShockMedia\Generated\Contacts\ContactGender $gender,
        public readonly string|null $firstName,
        public readonly string|null $lastName,
        public readonly string|null $companyName,
        public readonly \ShockMedia\Generated\Account\Account|null $account,
        public readonly array $email,
        public readonly array $telephone,
        public readonly string|null $notes,
        public readonly array $groups,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        $gender = \ShockMedia\Generated\Contacts\ContactGender::from($decodedJson['gender']);

        /** @var string|null $firstName */
        $firstName = $decodedJson['firstName'];

        /** @var string|null $lastName */
        $lastName = $decodedJson['lastName'];

        /** @var string|null $companyName */
        $companyName = $decodedJson['companyName'];

        if ($decodedJson['account'] === NULL) {
            $account = NULL;
        } else {
            $account = \ShockMedia\Generated\Account\Account::fromDecodedJson($decodedJson['account']);
        }

        $var0 = array();
        foreach ($decodedJson['email'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string|null[] $email */
        $email = $var0;

        $var0 = array();
        foreach ($decodedJson['telephone'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string|null[] $telephone */
        $telephone = $var0;

        /** @var string|null $notes */
        $notes = $decodedJson['notes'];

        $var0 = array();
        foreach ($decodedJson['groups'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string|null[] $groups */
        $groups = $var0;

        return new Contact
        (
            $id, $gender, $firstName, $lastName, $companyName, $account, $email, $telephone, $notes, $groups
        );
    }
}


class CreateContactInput
{
    /**
     * @param \ShockMedia\Generated\Auth\Permission[]|null $permissions
     * @param string[] $groups
     * @param string[] $emails
     * @param string[] $telephones
     */
    public function __construct
    (
        public readonly string|null $username,
        public readonly \ShockMedia\Generated\Language|null $language,
        public readonly array|null $permissions,
        public readonly \ShockMedia\Generated\Contacts\ContactGender $gender,
        public readonly string|null $firstName,
        public readonly string|null $lastName,
        public readonly string|null $companyName,
        public readonly array $groups,
        public readonly array $emails,
        public readonly array $telephones,
        public readonly string|null $notes,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $username */
        $username = $decodedJson['username'];

        if ($decodedJson['language'] === NULL) {
            $language = NULL;
        } else {
            $language = \ShockMedia\Generated\Language::from($decodedJson['language']);
        }

        if ($decodedJson['permissions'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['permissions'] as $element0) {
                $var0[] = \ShockMedia\Generated\Auth\Permission::from($element0);
            }
        }
        /** @var \ShockMedia\Generated\Auth\Permission[]|null $permissions */
        $permissions = $var0;

        $gender = \ShockMedia\Generated\Contacts\ContactGender::from($decodedJson['gender']);

        /** @var string|null $firstName */
        $firstName = $decodedJson['firstName'];

        /** @var string|null $lastName */
        $lastName = $decodedJson['lastName'];

        /** @var string|null $companyName */
        $companyName = $decodedJson['companyName'];

        $var0 = array();
        foreach ($decodedJson['groups'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $groups */
        $groups = $var0;

        $var0 = array();
        foreach ($decodedJson['emails'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $emails */
        $emails = $var0;

        $var0 = array();
        foreach ($decodedJson['telephones'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $telephones */
        $telephones = $var0;

        /** @var string|null $notes */
        $notes = $decodedJson['notes'];

        return new CreateContactInput
        (
            $username, $language, $permissions, $gender, $firstName, $lastName, $companyName, $groups, $emails, $telephones, $notes
        );
    }
}


class ContactUpdate
{
    /**
     * @param string[]|null $groups
     * @param string[]|null $emails
     * @param string[]|null $telephones
     */
    public function __construct
    (
        public readonly int $id,
        public readonly \ShockMedia\Generated\Contacts\ContactUpdate\PersonAlt2|null $person,
        public readonly string|null $companyName,
        public readonly array|null $groups,
        public readonly array|null $emails,
        public readonly array|null $telephones,
        public readonly string|null $notes,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        if ($decodedJson['person'] === NULL) {
            $person = NULL;
        } else {
            $person = \ShockMedia\Generated\Contacts\ContactUpdate\PersonAlt2::fromDecodedJson($decodedJson['person']);
        }

        /** @var string|null $companyName */
        $companyName = $decodedJson['companyName'];

        if ($decodedJson['groups'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['groups'] as $element0) {
                $var0[] = $element0;
            }
        }
        /** @var string[]|null $groups */
        $groups = $var0;

        if ($decodedJson['emails'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['emails'] as $element0) {
                $var0[] = $element0;
            }
        }
        /** @var string[]|null $emails */
        $emails = $var0;

        if ($decodedJson['telephones'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['telephones'] as $element0) {
                $var0[] = $element0;
            }
        }
        /** @var string[]|null $telephones */
        $telephones = $var0;

        /** @var string|null $notes */
        $notes = $decodedJson['notes'];

        return new ContactUpdate
        (
            $id, $person, $companyName, $groups, $emails, $telephones, $notes
        );
    }
}


class ContactGroup
{
    /**
     * @param (array{\ShockMedia\Generated\Language,string})[] $description
     */
    public function __construct
    (
        public readonly string $key,
        public readonly string $name,
        public readonly array $description,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $key */
        $key = $decodedJson['key'];

        /** @var string $name */
        $name = $decodedJson['name'];

        $var0 = array();
        foreach ($decodedJson['description'] as $element0) {
            $var1 = array();
            $var1[] = \ShockMedia\Generated\Language::from($element0[0]);
            $var1[] = $element0[1];
            $var0[] = $var1;
        }
        /** @var (array{\ShockMedia\Generated\Language,string})[] $description */
        $description = $var0;

        return new ContactGroup
        (
            $key, $name, $description
        );
    }
}


class ContactFilter
{
    public function __construct
    (
        public readonly string|null $name,
        public readonly string|null $group,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $name */
        $name = $decodedJson['name'];

        /** @var string|null $group */
        $group = $decodedJson['group'];

        return new ContactFilter
        (
            $name, $group
        );
    }
}


enum ContactGender: string
{
    case none = 'none';
    case male = 'male';
    case female = 'female';
}

namespace ShockMedia\Generated\Contacts\ContactUpdate;


class PersonAlt2
{
    public function __construct
    (
        public readonly string|null $gender,
        public readonly string|null $firstName,
        public readonly string|null $lastName,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $gender */
        $gender = $decodedJson['gender'];

        /** @var string|null $firstName */
        $firstName = $decodedJson['firstName'];

        /** @var string|null $lastName */
        $lastName = $decodedJson['lastName'];

        return new PersonAlt2
        (
            $gender, $firstName, $lastName
        );
    }
}
namespace ShockMedia\Generated\Invoices;


enum InvoiceState: string
{
    case open = 'open';
    case closed = 'closed';
}


class Invoice
{
    public function __construct
    (
        public readonly int $invoiceNumber,
        public readonly string|null $paymentDate,
        public readonly int $vat,
        public readonly int $customerId,
        public readonly string $invoiceMethod,
        public readonly bool $hasPrint,
        public readonly float $total,
        public readonly string $date,
        public readonly \ShockMedia\Generated\Invoices\InvoiceState $status,
        public readonly \ShockMedia\Generated\Invoices\InvoiceReminder|null $reminder,
        public readonly bool $payableByIdeal,
        public readonly \ShockMedia\Generated\Invoices\PaymentState|null $paymentState,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $invoiceNumber */
        $invoiceNumber = $decodedJson['invoiceNumber'];

        /** @var string|null $paymentDate */
        $paymentDate = $decodedJson['paymentDate'];

        /** @var int $vat */
        $vat = $decodedJson['vat'];

        /** @var int $customerId */
        $customerId = $decodedJson['customerId'];

        /** @var string $invoiceMethod */
        $invoiceMethod = $decodedJson['invoiceMethod'];

        /** @var bool $hasPrint */
        $hasPrint = $decodedJson['hasPrint'];

        /** @var float $total */
        $total = $decodedJson['total'];

        /** @var string $date */
        $date = $decodedJson['date'];

        $status = \ShockMedia\Generated\Invoices\InvoiceState::from($decodedJson['status']);

        if ($decodedJson['reminder'] === NULL) {
            $reminder = NULL;
        } else {
            $reminder = \ShockMedia\Generated\Invoices\InvoiceReminder::from($decodedJson['reminder']);
        }

        /** @var bool $payableByIdeal */
        $payableByIdeal = $decodedJson['payableByIdeal'];

        if ($decodedJson['paymentState'] === NULL) {
            $paymentState = NULL;
        } else {
            $paymentState = \ShockMedia\Generated\Invoices\PaymentState::from($decodedJson['paymentState']);
        }

        return new Invoice
        (
            $invoiceNumber, $paymentDate, $vat, $customerId, $invoiceMethod, $hasPrint, $total, $date, $status, $reminder, $payableByIdeal, $paymentState
        );
    }
}


enum InvoiceReminder: string
{
    case first = 'first';
    case second = 'second';
    case final = 'final';
}


enum PaymentState: string
{
    case processing = 'processing';
    case successful = 'successful';
    case failed = 'failed';
}


class EmsOrder
{
    public function __construct
    (
        public readonly int $invoiceNumber,
        public readonly string $transactionType,
        public readonly string $timezone,
        public readonly string $transactionTimestamp,
        public readonly string $hashAlgorithm,
        public readonly string $hash,
        public readonly string $storeName,
        public readonly string $paymentMode,
        public readonly string $paymentMethod,
        public readonly float $totalAmount,
        public readonly int $currencyCode,
        public readonly string $checkoutOption,
        public readonly string $orderId,
        public readonly string $language,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $invoiceNumber */
        $invoiceNumber = $decodedJson['invoiceNumber'];

        /** @var string $transactionType */
        $transactionType = $decodedJson['transactionType'];

        /** @var string $timezone */
        $timezone = $decodedJson['timezone'];

        /** @var string $transactionTimestamp */
        $transactionTimestamp = $decodedJson['transactionTimestamp'];

        /** @var string $hashAlgorithm */
        $hashAlgorithm = $decodedJson['hashAlgorithm'];

        /** @var string $hash */
        $hash = $decodedJson['hash'];

        /** @var string $storeName */
        $storeName = $decodedJson['storeName'];

        /** @var string $paymentMode */
        $paymentMode = $decodedJson['paymentMode'];

        /** @var string $paymentMethod */
        $paymentMethod = $decodedJson['paymentMethod'];

        /** @var float $totalAmount */
        $totalAmount = $decodedJson['totalAmount'];

        /** @var int $currencyCode */
        $currencyCode = $decodedJson['currencyCode'];

        /** @var string $checkoutOption */
        $checkoutOption = $decodedJson['checkoutOption'];

        /** @var string $orderId */
        $orderId = $decodedJson['orderId'];

        /** @var string $language */
        $language = $decodedJson['language'];

        return new EmsOrder
        (
            $invoiceNumber, $transactionType, $timezone, $transactionTimestamp, $hashAlgorithm, $hash, $storeName, $paymentMode, $paymentMethod, $totalAmount, $currencyCode, $checkoutOption, $orderId, $language
        );
    }
}


class InvoiceFilter
{
    /**
     * @param array{\ShockMedia\Generated\RangeType,string|null,string|null}|null $paymentDate
     */
    public function __construct
    (
        public readonly \ShockMedia\Generated\Invoices\InvoiceFilter\StatusAlt2|null $status,
        public readonly string|null $invoiceNumber,
        public readonly array|null $paymentDate,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        if ($decodedJson['status'] === NULL) {
            $status = NULL;
        } else {
            $status = \ShockMedia\Generated\Invoices\InvoiceFilter\StatusAlt2::from($decodedJson['status']);
        }

        /** @var string|null $invoiceNumber */
        $invoiceNumber = $decodedJson['invoiceNumber'];

        if ($decodedJson['paymentDate'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            $var0[] = \ShockMedia\Generated\RangeType::from($decodedJson['paymentDate'][0]);
            $var0[] = $decodedJson['paymentDate'][1];
            $var0[] = $decodedJson['paymentDate'][2];
        }
        /** @var array{\ShockMedia\Generated\RangeType,string|null,string|null}|null $paymentDate */
        $paymentDate = $var0;

        return new InvoiceFilter
        (
            $status, $invoiceNumber, $paymentDate
        );
    }
}

namespace ShockMedia\Generated\Invoices\InvoiceFilter;


enum StatusAlt2: string
{
    case open = 'open';
    case closed = 'closed';
}
namespace ShockMedia\Generated\Massdns;


class DnsRecordFilter
{
    /**
     * @param string|null[]|null $domains
     * @param string|null[]|null $types
     * @param int|null[]|null $ids
     */
    public function __construct
    (
        public readonly array|null $domains,
        public readonly array|null $types,
        public readonly int|null $ttl,
        public readonly string|null $name,
        public readonly array|null $ids,
        public readonly string|null $content,
        public readonly int|null $prio,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        if ($decodedJson['domains'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['domains'] as $element0) {
                $var0[] = $element0;
            }
        }
        /** @var string|null[]|null $domains */
        $domains = $var0;

        if ($decodedJson['types'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['types'] as $element0) {
                $var0[] = $element0;
            }
        }
        /** @var string|null[]|null $types */
        $types = $var0;

        /** @var int|null $ttl */
        $ttl = $decodedJson['ttl'];

        /** @var string|null $name */
        $name = $decodedJson['name'];

        if ($decodedJson['ids'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['ids'] as $element0) {
                $var0[] = $element0;
            }
        }
        /** @var int|null[]|null $ids */
        $ids = $var0;

        /** @var string|null $content */
        $content = $decodedJson['content'];

        /** @var int|null $prio */
        $prio = $decodedJson['prio'];

        return new DnsRecordFilter
        (
            $domains, $types, $ttl, $name, $ids, $content, $prio
        );
    }
}

namespace ShockMedia\Generated\Clouds;


class CpuInfo
{
    public function __construct
    (
        public readonly int|null $coreCount,
        public readonly int|null $threadCount,
        public readonly int|null $cpuPower,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int|null $coreCount */
        $coreCount = $decodedJson['coreCount'];

        /** @var int|null $threadCount */
        $threadCount = $decodedJson['threadCount'];

        /** @var int|null $cpuPower */
        $cpuPower = $decodedJson['cpuPower'];

        return new CpuInfo
        (
            $coreCount, $threadCount, $cpuPower
        );
    }
}


class Cloud
{
    /**
     * @param \ShockMedia\Generated\Clouds\Node[]|null $nodes
     * @param \ShockMedia\Generated\Clouds\Vm[]|null $vms
     */
    public function __construct
    (
        public readonly string $name,
        public readonly bool $multidatacenter,
        public readonly array|null $nodes,
        public readonly array|null $vms,
        public readonly \ShockMedia\Generated\Clouds\StorageStats|null $storageStats,
        public readonly \ShockMedia\Generated\Clouds\MemoryStats|null $memoryStats,
        public readonly \ShockMedia\Generated\Clouds\CpuInfo|null $cpuInfo,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var bool $multidatacenter */
        $multidatacenter = $decodedJson['multidatacenter'];

        if ($decodedJson['nodes'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['nodes'] as $element0) {
                $var0[] = \ShockMedia\Generated\Clouds\Node::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Clouds\Node[]|null $nodes */
        $nodes = $var0;

        if ($decodedJson['vms'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['vms'] as $element0) {
                $var0[] = \ShockMedia\Generated\Clouds\Vm::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Clouds\Vm[]|null $vms */
        $vms = $var0;

        if ($decodedJson['storageStats'] === NULL) {
            $storageStats = NULL;
        } else {
            $storageStats = \ShockMedia\Generated\Clouds\StorageStats::fromDecodedJson($decodedJson['storageStats']);
        }

        if ($decodedJson['memoryStats'] === NULL) {
            $memoryStats = NULL;
        } else {
            $memoryStats = \ShockMedia\Generated\Clouds\MemoryStats::fromDecodedJson($decodedJson['memoryStats']);
        }

        if ($decodedJson['cpuInfo'] === NULL) {
            $cpuInfo = NULL;
        } else {
            $cpuInfo = \ShockMedia\Generated\Clouds\CpuInfo::fromDecodedJson($decodedJson['cpuInfo']);
        }

        return new Cloud
        (
            $name, $multidatacenter, $nodes, $vms, $storageStats, $memoryStats, $cpuInfo
        );
    }
}


class MemoryStats
{
    public function __construct
    (
        public readonly int $total,
        public readonly int $free,
        public readonly int|null $allocated,
        public readonly int|null $reserved,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $total */
        $total = $decodedJson['total'];

        /** @var int $free */
        $free = $decodedJson['free'];

        /** @var int|null $allocated */
        $allocated = $decodedJson['allocated'];

        /** @var int|null $reserved */
        $reserved = $decodedJson['reserved'];

        return new MemoryStats
        (
            $total, $free, $allocated, $reserved
        );
    }
}


class Node
{
    public function __construct
    (
        public readonly string $name,
        public readonly string|null $admxName,
        public readonly int|null $memory,
        public readonly int|null $storage,
        public readonly int|null $cpuCount,
        public readonly string|null $datacenter,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $name */
        $name = $decodedJson['name'];

        /** @var string|null $admxName */
        $admxName = $decodedJson['admxName'];

        /** @var int|null $memory */
        $memory = $decodedJson['memory'];

        /** @var int|null $storage */
        $storage = $decodedJson['storage'];

        /** @var int|null $cpuCount */
        $cpuCount = $decodedJson['cpuCount'];

        /** @var string|null $datacenter */
        $datacenter = $decodedJson['datacenter'];

        return new Node
        (
            $name, $admxName, $memory, $storage, $cpuCount, $datacenter
        );
    }
}


class StorageStats
{
    public function __construct
    (
        public readonly int $total,
        public readonly int $free,
        public readonly int|null $used,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $total */
        $total = $decodedJson['total'];

        /** @var int $free */
        $free = $decodedJson['free'];

        /** @var int|null $used */
        $used = $decodedJson['used'];

        return new StorageStats
        (
            $total, $free, $used
        );
    }
}


class Vm
{
    public function __construct
    (
        public readonly string|null $name,
        public readonly int|null $cpuCount,
        public readonly int|null $memory,
        public readonly int|null $storage,
        public readonly bool $multiDatacenter,
        public readonly bool $redundant,
        public readonly bool $showServerPage,
        public readonly \ShockMedia\Generated\Servers\ServerSummary|null $server,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $name */
        $name = $decodedJson['name'];

        /** @var int|null $cpuCount */
        $cpuCount = $decodedJson['cpuCount'];

        /** @var int|null $memory */
        $memory = $decodedJson['memory'];

        /** @var int|null $storage */
        $storage = $decodedJson['storage'];

        /** @var bool $multiDatacenter */
        $multiDatacenter = $decodedJson['multiDatacenter'];

        /** @var bool $redundant */
        $redundant = $decodedJson['redundant'];

        /** @var bool $showServerPage */
        $showServerPage = $decodedJson['showServerPage'];

        if ($decodedJson['server'] === NULL) {
            $server = NULL;
        } else {
            $server = \ShockMedia\Generated\Servers\ServerSummary::fromDecodedJson($decodedJson['server']);
        }

        return new Vm
        (
            $name, $cpuCount, $memory, $storage, $multiDatacenter, $redundant, $showServerPage, $server
        );
    }
}

namespace ShockMedia\Generated\Incidents;


class IncidentReport
{
    public function __construct
    (
        public readonly int $id,
        public readonly string $date,
        public readonly string $title,
        public readonly string $filename,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $date */
        $date = $decodedJson['date'];

        /** @var string $title */
        $title = $decodedJson['title'];

        /** @var string $filename */
        $filename = $decodedJson['filename'];

        return new IncidentReport
        (
            $id, $date, $title, $filename
        );
    }
}

namespace ShockMedia\Generated\Blogs;


class UpdateBlogInput
{
    /**
     * @param \ShockMedia\Generated\Blogs\BlogMessage[]|null $messages
     */
    public function __construct
    (
        public readonly int $id,
        public readonly string|null $icon,
        public readonly array|null $messages,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string|null $icon */
        $icon = $decodedJson['icon'];

        if ($decodedJson['messages'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['messages'] as $element0) {
                $var0[] = \ShockMedia\Generated\Blogs\BlogMessage::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Blogs\BlogMessage[]|null $messages */
        $messages = $var0;

        return new UpdateBlogInput
        (
            $id, $icon, $messages
        );
    }
}


class BlogFilter
{
    public function __construct
    (
        public readonly string|null $titleLike,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $titleLike */
        $titleLike = $decodedJson['titleLike'];

        return new BlogFilter
        (
            $titleLike
        );
    }
}


class BlogMessage
{
    public function __construct
    (
        public readonly string $title,
        public readonly string $message,
        public readonly string $language,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $title */
        $title = $decodedJson['title'];

        /** @var string $message */
        $message = $decodedJson['message'];

        /** @var string $language */
        $language = $decodedJson['language'];

        return new BlogMessage
        (
            $title, $message, $language
        );
    }
}


class Blog
{
    /**
     * @param \ShockMedia\Generated\Blogs\BlogMessage[] $messages
     */
    public function __construct
    (
        public readonly int $id,
        public readonly array $messages,
        public readonly string $icon,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        $var0 = array();
        foreach ($decodedJson['messages'] as $element0) {
            $var0[] = \ShockMedia\Generated\Blogs\BlogMessage::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Blogs\BlogMessage[] $messages */
        $messages = $var0;

        /** @var string $icon */
        $icon = $decodedJson['icon'];

        return new Blog
        (
            $id, $messages, $icon
        );
    }
}

namespace ShockMedia\Generated\Auditlog;


class AuditLogEntry
{
    public function __construct
    (
        public readonly int|null $id,
        public readonly string $at,
        public readonly \ShockMedia\Generated\Auditlog\AuditLogEntry\Request $request,
        public readonly \ShockMedia\Generated\Auditlog\AuditLogEntry\Response $response,
        public readonly \ShockMedia\Generated\Auditlog\AuditLogEntry\Invocation $invocation,
        public readonly \ShockMedia\Generated\Auditlog\AuditLogEntry\Result $result,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int|null $id */
        $id = $decodedJson['id'];

        /** @var string $at */
        $at = $decodedJson['at'];

        $request = \ShockMedia\Generated\Auditlog\AuditLogEntry\Request::fromDecodedJson($decodedJson['request']);

        $response = \ShockMedia\Generated\Auditlog\AuditLogEntry\Response::fromDecodedJson($decodedJson['response']);

        $invocation = \ShockMedia\Generated\Auditlog\AuditLogEntry\Invocation::fromDecodedJson($decodedJson['invocation']);

        $result = \ShockMedia\Generated\Auditlog\AuditLogEntry\Result::fromDecodedJson($decodedJson['result']);

        return new AuditLogEntry
        (
            $id, $at, $request, $response, $invocation, $result
        );
    }
}


enum RequestType: string
{
    case jax_rs = 'jax_rs';
    case json_rpc = 'json_rpc';
}


class AuditLogFilter
{
    /**
     * @param array{\ShockMedia\Generated\RangeType,string|null,string|null}|null $at
     */
    public function __construct
    (
        public readonly int|null $customerId,
        public readonly int|null $myshockAccountId,
        public readonly int|null $employeeId,
        public readonly array|null $at,
        public readonly \ShockMedia\Generated\Auditlog\RequestType|null $requestType,
        public readonly string|null $ip,
        public readonly string|null $method,
        public readonly string|null $params,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int|null $customerId */
        $customerId = $decodedJson['customerId'];

        /** @var int|null $myshockAccountId */
        $myshockAccountId = $decodedJson['myshockAccountId'];

        /** @var int|null $employeeId */
        $employeeId = $decodedJson['employeeId'];

        if ($decodedJson['at'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            $var0[] = \ShockMedia\Generated\RangeType::from($decodedJson['at'][0]);
            $var0[] = $decodedJson['at'][1];
            $var0[] = $decodedJson['at'][2];
        }
        /** @var array{\ShockMedia\Generated\RangeType,string|null,string|null}|null $at */
        $at = $var0;

        if ($decodedJson['requestType'] === NULL) {
            $requestType = NULL;
        } else {
            $requestType = \ShockMedia\Generated\Auditlog\RequestType::from($decodedJson['requestType']);
        }

        /** @var string|null $ip */
        $ip = $decodedJson['ip'];

        /** @var string|null $method */
        $method = $decodedJson['method'];

        /** @var string|null $params */
        $params = $decodedJson['params'];

        return new AuditLogFilter
        (
            $customerId, $myshockAccountId, $employeeId, $at, $requestType, $ip, $method, $params
        );
    }
}

namespace ShockMedia\Generated\Auditlog\AuditLogEntry;


class Request
{
    /**
     * @param (array{string|null,string|null})[] $headers
     */
    public function __construct
    (
        public readonly \ShockMedia\Generated\Auditlog\RequestType $type,
        public readonly string $remoteHost,
        public readonly array $headers,
        public readonly string $path,
        public readonly \ShockMedia\Generated\Auditlog\Request\RequestAuth $auth,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $type = \ShockMedia\Generated\Auditlog\RequestType::from($decodedJson['type']);

        /** @var string $remoteHost */
        $remoteHost = $decodedJson['remoteHost'];

        $var0 = array();
        foreach ($decodedJson['headers'] as $element0) {
            $var1 = array();
            $var1[] = $element0[0];
            $var1[] = $element0[1];
            $var0[] = $var1;
        }
        /** @var (array{string|null,string|null})[] $headers */
        $headers = $var0;

        /** @var string $path */
        $path = $decodedJson['path'];

        $auth = \ShockMedia\Generated\Auditlog\Request\RequestAuth::fromDecodedJson($decodedJson['auth']);

        return new Request
        (
            $type, $remoteHost, $headers, $path, $auth
        );
    }
}

namespace ShockMedia\Generated\Auditlog\Request;


class RequestAuth
{
    public function __construct
    (
        public readonly bool $ok,
        public readonly string|null $error,
        public readonly \ShockMedia\Generated\Auditlog\RequestAuth\RequestAuthType $type,
        public readonly string|null $unknownType,
        public readonly int|null $accountId,
        public readonly int|null $myAccountId,
        public readonly int|null $customerId,
        public readonly int|null $shadowCustomer,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var bool $ok */
        $ok = $decodedJson['ok'];

        /** @var string|null $error */
        $error = $decodedJson['error'];

        $type = \ShockMedia\Generated\Auditlog\RequestAuth\RequestAuthType::from($decodedJson['type']);

        /** @var string|null $unknownType */
        $unknownType = $decodedJson['unknownType'];

        /** @var int|null $accountId */
        $accountId = $decodedJson['accountId'];

        /** @var int|null $myAccountId */
        $myAccountId = $decodedJson['myAccountId'];

        /** @var int|null $customerId */
        $customerId = $decodedJson['customerId'];

        /** @var int|null $shadowCustomer */
        $shadowCustomer = $decodedJson['shadowCustomer'];

        return new RequestAuth
        (
            $ok, $error, $type, $unknownType, $accountId, $myAccountId, $customerId, $shadowCustomer
        );
    }
}

namespace ShockMedia\Generated\Auditlog\RequestAuth;


enum RequestAuthType: string
{
    case none = 'none';
    case unknown = 'unknown';
    case wslf_builtin = 'wslf_builtin';
    case token = 'token';
    case affiliate_token = 'affiliate_token';
    case employee_token = 'employee_token';
    case shared_secret = 'shared_secret';
}

namespace ShockMedia\Generated\Auditlog\AuditLogEntry;


class Response
{
    public function __construct
    (
        public readonly bool $regular,
        public readonly int $code,
        public readonly string|null $error,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var bool $regular */
        $regular = $decodedJson['regular'];

        /** @var int $code */
        $code = $decodedJson['code'];

        /** @var string|null $error */
        $error = $decodedJson['error'];

        return new Response
        (
            $regular, $code, $error
        );
    }
}

namespace ShockMedia\Generated\Auditlog\AuditLogEntry;


class Invocation
{
    public function __construct
    (
        public readonly string $resourceClass,
        public readonly string $method,
        public readonly string $params,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $resourceClass */
        $resourceClass = $decodedJson['resourceClass'];

        /** @var string $method */
        $method = $decodedJson['method'];

        /** @var string $params */
        $params = $decodedJson['params'];

        return new Invocation
        (
            $resourceClass, $method, $params
        );
    }
}

namespace ShockMedia\Generated\Auditlog\AuditLogEntry;


class Result
{
    public function __construct
    (
        public readonly string $contentType,
        public readonly string|null $value,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $contentType */
        $contentType = $decodedJson['contentType'];

        /** @var string|null $value */
        $value = $decodedJson['value'];

        return new Result
        (
            $contentType, $value
        );
    }
}
namespace ShockMedia\Generated\Translations;


class Translation
{
    public function __construct
    (
        public readonly \ShockMedia\Generated\Language $language,
        public readonly mixed $translations,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $language = \ShockMedia\Generated\Language::from($decodedJson['language']);

        /** @var mixed $translations */
        $translations = $decodedJson['translations'];

        return new Translation
        (
            $language, $translations
        );
    }
}

namespace ShockMedia\Generated\Changelog;


class Changelog
{
    /**
     * @param \ShockMedia\Generated\Changelog\Changelog\Release[] $releases
     */
    public function __construct
    (
        public readonly \ShockMedia\Generated\Language $language,
        public readonly array $releases,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        $language = \ShockMedia\Generated\Language::from($decodedJson['language']);

        $var0 = array();
        foreach ($decodedJson['releases'] as $element0) {
            $var0[] = \ShockMedia\Generated\Changelog\Changelog\Release::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Changelog\Changelog\Release[] $releases */
        $releases = $var0;

        return new Changelog
        (
            $language, $releases
        );
    }
}

namespace ShockMedia\Generated\Changelog\Changelog;


class Release
{
    /**
     * @param \ShockMedia\Generated\Changelog\Release\Change[] $changes
     */
    public function __construct
    (
        public readonly string $version,
        public readonly array $changes,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $version */
        $version = $decodedJson['version'];

        $var0 = array();
        foreach ($decodedJson['changes'] as $element0) {
            $var0[] = \ShockMedia\Generated\Changelog\Release\Change::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Changelog\Release\Change[] $changes */
        $changes = $var0;

        return new Release
        (
            $version, $changes
        );
    }
}

namespace ShockMedia\Generated\Changelog\Release;


class Change
{
    /**
     * @param string[] $log
     */
    public function __construct
    (
        public readonly string $group,
        public readonly array $log,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $group */
        $group = $decodedJson['group'];

        $var0 = array();
        foreach ($decodedJson['log'] as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $log */
        $log = $var0;

        return new Change
        (
            $group, $log
        );
    }
}
namespace ShockMedia\Generated\Announcements;


class Announcement
{
    /**
     * @param (array{string,string})[] $message
     */
    public function __construct
    (
        public readonly int $id,
        public readonly array $message,
        public readonly string $icon,
        public readonly \ShockMedia\Generated\Announcements\AnnouncementSeverity $severity,
        public readonly string|null $expire,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        $var0 = array();
        foreach ($decodedJson['message'] as $element0) {
            $var1 = array();
            $var1[] = $element0[0];
            $var1[] = $element0[1];
            $var0[] = $var1;
        }
        /** @var (array{string,string})[] $message */
        $message = $var0;

        /** @var string $icon */
        $icon = $decodedJson['icon'];

        $severity = \ShockMedia\Generated\Announcements\AnnouncementSeverity::from($decodedJson['severity']);

        /** @var string|null $expire */
        $expire = $decodedJson['expire'];

        return new Announcement
        (
            $id, $message, $icon, $severity, $expire
        );
    }
}


class AnnouncementFilter
{
    public function __construct
    (
        public readonly bool|null $unreadByCurrentAccount,
        public readonly bool $showExpired,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var bool|null $unreadByCurrentAccount */
        $unreadByCurrentAccount = $decodedJson['unreadByCurrentAccount'];

        /** @var bool $showExpired */
        $showExpired = $decodedJson['showExpired'];

        return new AnnouncementFilter
        (
            $unreadByCurrentAccount, $showExpired
        );
    }
}


class UpdateAnnouncementInput
{
    /**
     * @param (array{string,string})[]|null $message
     */
    public function __construct
    (
        public readonly int $id,
        public readonly string|null $icon,
        public readonly \ShockMedia\Generated\Announcements\AnnouncementSeverity|null $severity,
        public readonly string|null $expiryDate,
        public readonly array|null $message,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string|null $icon */
        $icon = $decodedJson['icon'];

        if ($decodedJson['severity'] === NULL) {
            $severity = NULL;
        } else {
            $severity = \ShockMedia\Generated\Announcements\AnnouncementSeverity::from($decodedJson['severity']);
        }

        /** @var string|null $expiryDate */
        $expiryDate = $decodedJson['expiryDate'];

        if ($decodedJson['message'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['message'] as $element0) {
                $var1 = array();
                $var1[] = $element0[0];
                $var1[] = $element0[1];
                $var0[] = $var1;
            }
        }
        /** @var (array{string,string})[]|null $message */
        $message = $var0;

        return new UpdateAnnouncementInput
        (
            $id, $icon, $severity, $expiryDate, $message
        );
    }
}


enum AnnouncementSeverity: string
{
    case info = 'info';
    case success = 'success';
    case warning = 'warning';
    case danger = 'danger';
}

namespace ShockMedia\Generated\Account;


class UpdateAccountInput
{
    /**
     * @param \ShockMedia\Generated\Auth\Permission[]|null $permissions
     */
    public function __construct
    (
        public readonly int $id,
        public readonly string|null $name,
        public readonly bool|null $disabled,
        public readonly bool|null $newPasswordRequired,
        public readonly array|null $permissions,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string|null $name */
        $name = $decodedJson['name'];

        /** @var bool|null $disabled */
        $disabled = $decodedJson['disabled'];

        /** @var bool|null $newPasswordRequired */
        $newPasswordRequired = $decodedJson['newPasswordRequired'];

        if ($decodedJson['permissions'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['permissions'] as $element0) {
                $var0[] = \ShockMedia\Generated\Auth\Permission::from($element0);
            }
        }
        /** @var \ShockMedia\Generated\Auth\Permission[]|null $permissions */
        $permissions = $var0;

        return new UpdateAccountInput
        (
            $id, $name, $disabled, $newPasswordRequired, $permissions
        );
    }
}


class Account
{
    /**
     * @param \ShockMedia\Generated\Auth\Permission[]|null $permissions
     */
    public function __construct
    (
        public readonly int $id,
        public readonly int $contactId,
        public readonly int $customerId,
        public readonly string|null $userName,
        public readonly bool $disabled,
        public readonly \ShockMedia\Generated\Language|null $preferredLanguage,
        public readonly bool $requiresNewPassword,
        public readonly bool $loggedIn,
        public readonly bool $twoFactorAuthenticationEmailFallbackEnabled,
        public readonly array|null $permissions,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var int $contactId */
        $contactId = $decodedJson['contactId'];

        /** @var int $customerId */
        $customerId = $decodedJson['customerId'];

        /** @var string|null $userName */
        $userName = $decodedJson['userName'];

        /** @var bool $disabled */
        $disabled = $decodedJson['disabled'];

        if ($decodedJson['preferredLanguage'] === NULL) {
            $preferredLanguage = NULL;
        } else {
            $preferredLanguage = \ShockMedia\Generated\Language::from($decodedJson['preferredLanguage']);
        }

        /** @var bool $requiresNewPassword */
        $requiresNewPassword = $decodedJson['requiresNewPassword'];

        /** @var bool $loggedIn */
        $loggedIn = $decodedJson['loggedIn'];

        /** @var bool $twoFactorAuthenticationEmailFallbackEnabled */
        $twoFactorAuthenticationEmailFallbackEnabled = $decodedJson['twoFactorAuthenticationEmailFallbackEnabled'];

        if ($decodedJson['permissions'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['permissions'] as $element0) {
                $var0[] = \ShockMedia\Generated\Auth\Permission::from($element0);
            }
        }
        /** @var \ShockMedia\Generated\Auth\Permission[]|null $permissions */
        $permissions = $var0;

        return new Account
        (
            $id, $contactId, $customerId, $userName, $disabled, $preferredLanguage, $requiresNewPassword, $loggedIn, $twoFactorAuthenticationEmailFallbackEnabled, $permissions
        );
    }
}

namespace ShockMedia\Generated\Leads;


class CreateLeadInput
{
    /**
     * @param \ShockMedia\Generated\Tickets\CreateAttachmentInput[]|null $attachments
     */
    public function __construct
    (
        public readonly string $companyName,
        public readonly string $contactName,
        public readonly string $location,
        public readonly string|null $email,
        public readonly string|null $phone,
        public readonly \ShockMedia\Generated\Leads\CreateLeadInput\Relation $relation,
        public readonly string $date,
        public readonly array|null $attachments,
        public readonly string|null $details,
        public readonly \ShockMedia\Generated\Leads\CreateLeadInput\FollowUp $followUp,
        public readonly bool $leadAware,
        public readonly string|null $followUpComments,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string $companyName */
        $companyName = $decodedJson['companyName'];

        /** @var string $contactName */
        $contactName = $decodedJson['contactName'];

        /** @var string $location */
        $location = $decodedJson['location'];

        /** @var string|null $email */
        $email = $decodedJson['email'];

        /** @var string|null $phone */
        $phone = $decodedJson['phone'];

        $relation = \ShockMedia\Generated\Leads\CreateLeadInput\Relation::from($decodedJson['relation']);

        /** @var string $date */
        $date = $decodedJson['date'];

        if ($decodedJson['attachments'] === NULL) {
            $var0 = NULL;
        } else {
            $var0 = array();
            foreach ($decodedJson['attachments'] as $element0) {
                $var0[] = \ShockMedia\Generated\Tickets\CreateAttachmentInput::fromDecodedJson($element0);
            }
        }
        /** @var \ShockMedia\Generated\Tickets\CreateAttachmentInput[]|null $attachments */
        $attachments = $var0;

        /** @var string|null $details */
        $details = $decodedJson['details'];

        $followUp = \ShockMedia\Generated\Leads\CreateLeadInput\FollowUp::from($decodedJson['followUp']);

        /** @var bool $leadAware */
        $leadAware = $decodedJson['leadAware'];

        /** @var string|null $followUpComments */
        $followUpComments = $decodedJson['followUpComments'];

        return new CreateLeadInput
        (
            $companyName, $contactName, $location, $email, $phone, $relation, $date, $attachments, $details, $followUp, $leadAware, $followUpComments
        );
    }
}

namespace ShockMedia\Generated\Leads\CreateLeadInput;


enum Relation: string
{
    case client = 'client';
    case supplier = 'supplier';
    case potential_client = 'potential_client';
    case friend = 'friend';
    case relation_other = 'relation_other';
    case other = 'other';
}

namespace ShockMedia\Generated\Leads\CreateLeadInput;


enum FollowUp: string
{
    case lead = 'lead';
    case shock_media = 'shock_media';
}
namespace ShockMedia\Generated\Reminder;


enum ReminderType: string
{
    case acl = 'acl';
    case auth = 'auth';
    case security = 'security';
}

namespace ShockMedia\Generated\Activities;


class Activity
{
    public function __construct
    (
        public readonly int $id,
        public readonly string $subject,
        public readonly string $description,
        public readonly string $start,
        public readonly string $duration,
        public readonly int|null $serverId,
        public readonly string|null $serverName,
        public readonly bool $owner,
        public readonly bool $system,
        public readonly \ShockMedia\Generated\Activities\Activity\TicketAlt2|null $ticket,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $subject */
        $subject = $decodedJson['subject'];

        /** @var string $description */
        $description = $decodedJson['description'];

        /** @var string $start */
        $start = $decodedJson['start'];

        /** @var string $duration */
        $duration = $decodedJson['duration'];

        /** @var int|null $serverId */
        $serverId = $decodedJson['serverId'];

        /** @var string|null $serverName */
        $serverName = $decodedJson['serverName'];

        /** @var bool $owner */
        $owner = $decodedJson['owner'];

        /** @var bool $system */
        $system = $decodedJson['system'];

        if ($decodedJson['ticket'] === NULL) {
            $ticket = NULL;
        } else {
            $ticket = \ShockMedia\Generated\Activities\Activity\TicketAlt2::fromDecodedJson($decodedJson['ticket']);
        }

        return new Activity
        (
            $id, $subject, $description, $start, $duration, $serverId, $serverName, $owner, $system, $ticket
        );
    }
}


class ActivityFilter
{
    public function __construct
    (
        public readonly string|null $fqdn,
        public readonly string|null $query,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var string|null $fqdn */
        $fqdn = $decodedJson['fqdn'];

        /** @var string|null $query */
        $query = $decodedJson['query'];

        return new ActivityFilter
        (
            $fqdn, $query
        );
    }
}

namespace ShockMedia\Generated\Activities\Activity;


class TicketAlt2
{
    public function __construct
    (
        public readonly int $id,
        public readonly string $authCode,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var int $id */
        $id = $decodedJson['id'];

        /** @var string $authCode */
        $authCode = $decodedJson['authCode'];

        return new TicketAlt2
        (
            $id, $authCode
        );
    }
}
namespace ShockMedia\Generated\Webforwarding;


class WebForwardingState
{
    public function __construct
    (
        public readonly bool $enabled,
        public readonly string|null $targetAddress,
        public readonly bool|null $completionEnabled,
        public readonly bool $dnsUpdateNeeded,
    ) {
    }

    public static function fromDecodedJson(array $decodedJson)
    {
        /** @var bool $enabled */
        $enabled = $decodedJson['enabled'];

        /** @var string|null $targetAddress */
        $targetAddress = $decodedJson['targetAddress'];

        /** @var bool|null $completionEnabled */
        $completionEnabled = $decodedJson['completionEnabled'];

        /** @var bool $dnsUpdateNeeded */
        $dnsUpdateNeeded = $decodedJson['dnsUpdateNeeded'];

        return new WebForwardingState
        (
            $enabled, $targetAddress, $completionEnabled, $dnsUpdateNeeded
        );
    }
}
