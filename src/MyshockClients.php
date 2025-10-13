<?php

namespace ShockMedia\Generated\MassDns;

class MassDnsClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return string[]
     */
    public function listEditableZones(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('MassDns.listEditableZones', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @return \ShockMedia\Generated\Domains\DnsRecord[]
     */
    public function listRecords(
        \ShockMedia\Generated\Massdns\DnsRecordFilter $filter,
    ) {
        $_params = array(
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('MassDns.listRecords', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Domains\DnsRecord::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Domains\DnsRecord[] $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @param string[] $domainNames
     */
    public function addRecords(
        array $domainNames,
        \ShockMedia\Generated\Domains\DnsRecordInput $record,
    ) {
        $_params = array(
            'domainNames' => $domainNames,
            'record' => $record,
        );
        $this->httpClient->apiCall('MassDns.addRecords', $_params);
    }

    /**
     * @param int|null[] $recordIds
     */
    public function updateRecords(
        array $recordIds,
        string $target,
        string $replacement,
    ) {
        $_params = array(
            'recordIds' => $recordIds,
            'target' => $target,
            'replacement' => $replacement,
        );
        $this->httpClient->apiCall('MassDns.updateRecords', $_params);
    }

}

namespace ShockMedia\Generated\WebForwarding;

class WebForwardingClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function setWebForwarding(
        string $domainName,
        string|null $targetUrl,
        bool $enableCompletion,
    ) {
        $_params = array(
            'domainName' => $domainName,
            'targetUrl' => $targetUrl,
            'enableCompletion' => $enableCompletion,
        );
        $this->httpClient->apiCall('WebForwarding.setWebForwarding', $_params);
    }

    public function disableWebForwarding(
        string $domainName,
    ) {
        $_params = array(
            'domainName' => $domainName,
        );
        $this->httpClient->apiCall('WebForwarding.disableWebForwarding', $_params);
    }

    public function fixDnsSettings(
        string $domainName,
    ) {
        $_params = array(
            'domainName' => $domainName,
        );
        $this->httpClient->apiCall('WebForwarding.fixDnsSettings', $_params);
    }

}

namespace ShockMedia\Generated\Auth;

class AuthClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function updateAuthUserAndPassword(
        string $username,
        string $password,
    ) {
        $_params = array(
            'username' => $username,
            'password' => $password,
        );
        $this->httpClient->apiCall('Auth.updateAuthUserAndPassword', $_params);
    }

    public function updateAuthOTP(
        string $otp,
    ) {
        $_params = array(
            'otp' => $otp,
        );
        $this->httpClient->apiCall('Auth.updateAuthOTP', $_params);
    }

    /**
     * @param int[] $recoveryCode
     */
    public function updateAuthRC(
        array $recoveryCode,
    ) {
        $_params = array(
            'recoveryCode' => $recoveryCode,
        );
        $this->httpClient->apiCall('Auth.updateAuthRC', $_params);
    }

    public function updateAuthRememberMe(
        bool $remember,
    ) {
        $_params = array(
            'remember' => $remember,
        );
        $this->httpClient->apiCall('Auth.updateAuthRememberMe', $_params);
    }

    public function getAuthState(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Auth.getAuthState', $_params);
        $_result = \ShockMedia\Generated\Auth\AuthState::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    public function getCurrentUserInfo(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Auth.getCurrentUserInfo', $_params);
        $_result = \ShockMedia\Generated\Auth\CurrentUserInfo::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    public function logout(
    ) {
        $_params = array();
        $this->httpClient->apiCall('Auth.logout', $_params);
    }

    public function deleteImpersonation(
    ) {
        $_params = array();
        $this->httpClient->apiCall('Auth.deleteImpersonation', $_params);
    }

    public function updatePassword(
        string $currentPassword,
        string $newPassword,
        bool $terminateSessions,
    ) {
        $_params = array(
            'currentPassword' => $currentPassword,
            'newPassword' => $newPassword,
            'terminateSessions' => $terminateSessions,
        );
        $this->httpClient->apiCall('Auth.updatePassword', $_params);
    }

    public function checkPasswordValidity(
        string $currentPassword,
    ) {
        $_params = array(
            'currentPassword' => $currentPassword,
        );
        $this->httpClient->apiCall('Auth.checkPasswordValidity', $_params);
    }

    public function emailFallbackOTP(
    ) {
        $_params = array();
        $this->httpClient->apiCall('Auth.emailFallbackOTP', $_params);
    }

    public function createOTPFactorKey(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Auth.createOTPFactorKey', $_params);
        /** @var string $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function updateOTPFactorKey(
        string $password,
        string $key,
        string $otp,
    ) {
        $_params = array(
            'password' => $password,
            'key' => $key,
            'otp' => $otp,
        );
        $this->httpClient->apiCall('Auth.updateOTPFactorKey', $_params);
    }

    public function disableOTPFactor(
        string $password,
        string $otp,
    ) {
        $_params = array(
            'password' => $password,
            'otp' => $otp,
        );
        $this->httpClient->apiCall('Auth.disableOTPFactor', $_params);
    }

    public function emailUnblockAccount(
        string $username,
    ) {
        $_params = array(
            'username' => $username,
        );
        $this->httpClient->apiCall('Auth.emailUnblockAccount', $_params);
    }

    public function unblockAccount(
        string $username,
        string $token,
    ) {
        $_params = array(
            'username' => $username,
            'token' => $token,
        );
        $this->httpClient->apiCall('Auth.unblockAccount', $_params);
    }

    public function emailPasswordReset(
        string $username,
    ) {
        $_params = array(
            'username' => $username,
        );
        $this->httpClient->apiCall('Auth.emailPasswordReset', $_params);
    }

    public function resetPassword(
        string $username,
        string $password,
        string $token,
        bool $terminateSessions,
    ) {
        $_params = array(
            'username' => $username,
            'password' => $password,
            'token' => $token,
            'terminateSessions' => $terminateSessions,
        );
        $this->httpClient->apiCall('Auth.resetPassword', $_params);
    }

    /**
     * @return (int[])[]
     */
    public function createOTPFactorRecoveryCodes(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Auth.createOTPFactorRecoveryCodes', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var1 = array();
            foreach ($element0 as $element1) {
                $var1[] = $element1;
            }
            $var0[] = $var1;
        }
        /** @var (int[])[] $_result */
        $_result = $var0;
        return $_result;
    }

    public function disableOTPFactorRecoveryCodes(
    ) {
        $_params = array();
        $this->httpClient->apiCall('Auth.disableOTPFactorRecoveryCodes', $_params);
    }

    public function updateOTPFactorEmailFallbackStatus(
        bool $enabled,
    ) {
        $_params = array(
            'enabled' => $enabled,
        );
        $this->httpClient->apiCall('Auth.updateOTPFactorEmailFallbackStatus', $_params);
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Auth\Session[]}
     */
    public function listSessions(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Auth\SessionFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Auth.listSessions', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Auth\Session::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Auth\Session[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function revokeSession(
        string $tokenHash,
    ) {
        $_params = array(
            'tokenHash' => $tokenHash,
        );
        $this->httpClient->apiCall('Auth.revokeSession', $_params);
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Auth\ApiToken[]}
     */
    public function listApiTokens(
        \ShockMedia\Generated\PageRequest $page,
    ) {
        $_params = array(
            'page' => $page,
        );
        $_apiCallResult = $this->httpClient->apiCall('Auth.listApiTokens', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Auth\ApiToken::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Auth\ApiToken[]} $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @param \ShockMedia\Generated\Auth\Permission[] $permissions
     * @param string[]|null $ipWhitelist
     */
    public function createApiToken(
        string $name,
        array $permissions,
        string|null $expiryDate,
        array|null $ipWhitelist,
    ) {
        $_params = array(
            'name' => $name,
            'permissions' => $permissions,
            'expiryDate' => $expiryDate,
            'ipWhitelist' => $ipWhitelist,
        );
        $_apiCallResult = $this->httpClient->apiCall('Auth.createApiToken', $_params);
        /** @var string $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function deleteApiToken(
        int $id,
    ) {
        $_params = array(
            'id' => $id,
        );
        $this->httpClient->apiCall('Auth.deleteApiToken', $_params);
    }

}

namespace ShockMedia\Generated\Order;

class OrderClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Orders\Order[]}
     */
    public function listOrders(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Orders\OrderFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Order.listOrders', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Orders\Order::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Orders\Order[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getOrder(
        int $orderId,
    ) {
        $_params = array(
            'orderId' => $orderId,
        );
        $_apiCallResult = $this->httpClient->apiCall('Order.getOrder', $_params);
        $_result = \ShockMedia\Generated\Orders\Order::fromDecodedJson($_apiCallResult);
        return $_result;
    }

}

namespace ShockMedia\Generated\Customer;

class CustomerClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function getCustomer(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Customer.getCustomer', $_params);
        $_result = \ShockMedia\Generated\Customers\Customer::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    public function updateCustomer(
        \ShockMedia\Generated\Customers\CustomerUpdate $customer,
    ) {
        $_params = array(
            'customer' => $customer,
        );
        $this->httpClient->apiCall('Customer.updateCustomer', $_params);
    }

    public function getLocation(
        string|null $postalCode,
        string|null $houseId,
    ) {
        $_params = array(
            'postalCode' => $postalCode,
            'houseId' => $houseId,
        );
        $this->httpClient->apiCall('Customer.getLocation', $_params);
    }

}

namespace ShockMedia\Generated\OnlinePayment;

class OnlinePaymentClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function getEmsOrder(
        int $invoiceNumber,
        string|null $authCode,
    ) {
        $_params = array(
            'invoiceNumber' => $invoiceNumber,
            'authCode' => $authCode,
        );
        $_apiCallResult = $this->httpClient->apiCall('OnlinePayment.getEmsOrder', $_params);
        $_result = \ShockMedia\Generated\Invoices\EmsOrder::fromDecodedJson($_apiCallResult);
        return $_result;
    }

}

namespace ShockMedia\Generated\Activity;

class ActivityClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Activities\Activity[]}
     */
    public function listActivities(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Activities\ActivityFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Activity.listActivities', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Activities\Activity::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Activities\Activity[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getActivity(
        int $id,
    ) {
        $_params = array(
            'id' => $id,
        );
        $_apiCallResult = $this->httpClient->apiCall('Activity.getActivity', $_params);
        $_result = \ShockMedia\Generated\Activities\Activity::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    public function getActivityCount(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Activity.getActivityCount', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

}

namespace ShockMedia\Generated\Partner;

class PartnerClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return \ShockMedia\Generated\Partners\DiscountGroup[]
     */
    public function listDiscounts(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Partner.listDiscounts', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Partners\DiscountGroup::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Partners\DiscountGroup[] $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @return \ShockMedia\Generated\Partners\Kickback[]
     */
    public function listKickbacks(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Partner.listKickbacks', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Partners\Kickback::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Partners\Kickback[] $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @return \ShockMedia\Generated\Partners\ReleasedKickback[]
     */
    public function listReleasedKickbacks(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Partner.listReleasedKickbacks', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Partners\ReleasedKickback::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Partners\ReleasedKickback[] $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @return \ShockMedia\Generated\Partners\KickbackClaim[]
     */
    public function listClaims(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Partner.listClaims', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Partners\KickbackClaim::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Partners\KickbackClaim[] $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @return \ShockMedia\Generated\Partners\KickbackPartner[]
     */
    public function listKickbackPartners(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Partner.listKickbackPartners', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Partners\KickbackPartner::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Partners\KickbackPartner[] $_result */
        $_result = $var0;
        return $_result;
    }

    public function getKickbackFee(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Partner.getKickbackFee', $_params);
        /** @var float $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    /**
     * @param int|null[] $releasedKickbackIds
     */
    public function createClaim(
        array $releasedKickbackIds,
    ) {
        $_params = array(
            'releasedKickbackIds' => $releasedKickbackIds,
        );
        $_apiCallResult = $this->httpClient->apiCall('Partner.createClaim', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function getClaim(
        int $claimId,
    ) {
        $_params = array(
            'claimId' => $claimId,
        );
        $_apiCallResult = $this->httpClient->apiCall('Partner.getClaim', $_params);
        $_result = \ShockMedia\Generated\Partners\KickbackClaim::fromDecodedJson($_apiCallResult);
        return $_result;
    }

}

namespace ShockMedia\Generated\AffiliateAccess;

class AffiliateAccessClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return \ShockMedia\Generated\Customers\CustomerSummary[]
     */
    public function listAffiliates(
        bool $manageble,
    ) {
        $_params = array(
            'manageble' => $manageble,
        );
        $_apiCallResult = $this->httpClient->apiCall('AffiliateAccess.listAffiliates', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Customers\CustomerSummary::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Customers\CustomerSummary[] $_result */
        $_result = $var0;
        return $_result;
    }

    public function getAffiliate(
        string $affiliateCode,
    ) {
        $_params = array(
            'affiliateCode' => $affiliateCode,
        );
        $_apiCallResult = $this->httpClient->apiCall('AffiliateAccess.getAffiliate', $_params);
        $_result = \ShockMedia\Generated\Customers\CustomerSummary::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    public function updateAffiliateAccess(
        int $affiliateId,
        string|null $affiliateCode,
    ) {
        $_params = array(
            'affiliateId' => $affiliateId,
            'affiliateCode' => $affiliateCode,
        );
        $this->httpClient->apiCall('AffiliateAccess.updateAffiliateAccess', $_params);
    }

    public function impersonateAffiliate(
        int $affiliateId,
    ) {
        $_params = array(
            'affiliateId' => $affiliateId,
        );
        $this->httpClient->apiCall('AffiliateAccess.impersonateAffiliate', $_params);
    }

}

namespace ShockMedia\Generated\Domain;

class DomainClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Domains\Domain[]}
     */
    public function listDomains(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Domains\DomainFilter|null $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Domain.listDomains', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Domains\Domain::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Domains\Domain[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getDomain(
        string $domainName,
        \ShockMedia\Generated\SortField|null $dnsRecordsSort,
    ) {
        $_params = array(
            'domainName' => $domainName,
            'dnsRecordsSort' => $dnsRecordsSort,
        );
        $_apiCallResult = $this->httpClient->apiCall('Domain.getDomain', $_params);
        $_result = \ShockMedia\Generated\Domains\Domain::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    /**
     * @param \ShockMedia\Generated\Domains\DnsRecordInput[] $records
     */
    public function updateDomain(
        string $domainName,
        array $records,
    ) {
        $_params = array(
            'domainName' => $domainName,
            'records' => $records,
        );
        $this->httpClient->apiCall('Domain.updateDomain', $_params);
    }

    public function addRecord(
        string $domainName,
        \ShockMedia\Generated\Domains\DnsRecordInput $record,
    ) {
        $_params = array(
            'domainName' => $domainName,
            'record' => $record,
        );
        $this->httpClient->apiCall('Domain.addRecord', $_params);
    }

    public function updateRecord(
        string $domainName,
        int $recordId,
        \ShockMedia\Generated\Domains\DnsRecordInput $record,
    ) {
        $_params = array(
            'domainName' => $domainName,
            'recordId' => $recordId,
            'record' => $record,
        );
        $this->httpClient->apiCall('Domain.updateRecord', $_params);
    }

    public function deleteRecord(
        string $domainName,
        int $recordId,
    ) {
        $_params = array(
            'domainName' => $domainName,
            'recordId' => $recordId,
        );
        $this->httpClient->apiCall('Domain.deleteRecord', $_params);
    }

}

namespace ShockMedia\Generated\Incident;

class IncidentClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Incidents\IncidentReport[]}
     */
    public function listReports(
        \ShockMedia\Generated\PageRequest $page,
    ) {
        $_params = array(
            'page' => $page,
        );
        $_apiCallResult = $this->httpClient->apiCall('Incident.listReports', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Incidents\IncidentReport::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Incidents\IncidentReport[]} $_result */
        $_result = $var0;
        return $_result;
    }

}

namespace ShockMedia\Generated\Blog;

class BlogClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Blogs\Blog[]}
     */
    public function listBlogs(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Blogs\BlogFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Blog.listBlogs', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Blogs\Blog::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Blogs\Blog[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getBlog(
        int $blogId,
    ) {
        $_params = array(
            'blogId' => $blogId,
        );
        $_apiCallResult = $this->httpClient->apiCall('Blog.getBlog', $_params);
        $_result = \ShockMedia\Generated\Blogs\Blog::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    /**
     * @param \ShockMedia\Generated\Blogs\BlogMessage[] $messages
     */
    public function createBlog(
        array $messages,
        string $icon,
    ) {
        $_params = array(
            'messages' => $messages,
            'icon' => $icon,
        );
        $_apiCallResult = $this->httpClient->apiCall('Blog.createBlog', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function deleteBlog(
        int $blogId,
    ) {
        $_params = array(
            'blogId' => $blogId,
        );
        $this->httpClient->apiCall('Blog.deleteBlog', $_params);
    }

    public function updateBlog(
        \ShockMedia\Generated\Blogs\UpdateBlogInput $input,
    ) {
        $_params = array(
            'input' => $input,
        );
        $this->httpClient->apiCall('Blog.updateBlog', $_params);
    }

}

namespace ShockMedia\Generated\Noc;

class NocClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function getNotificationCount(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Noc.getNotificationCount', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

}

namespace ShockMedia\Generated\Hosting;

class HostingClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function getLoginUrl(
        int $packageId,
    ) {
        $_params = array(
            'packageId' => $packageId,
        );
        $_apiCallResult = $this->httpClient->apiCall('Hosting.getLoginUrl', $_params);
        /** @var string $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

}

namespace ShockMedia\Generated\Changelog;

class ChangelogClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function getChangelog(
        \ShockMedia\Generated\Language $language,
    ) {
        $_params = array(
            'language' => $language,
        );
        $_apiCallResult = $this->httpClient->apiCall('Changelog.getChangelog', $_params);
        $_result = \ShockMedia\Generated\Changelog\Changelog::fromDecodedJson($_apiCallResult);
        return $_result;
    }

}

namespace ShockMedia\Generated\Ticket;

class TicketClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function getTicket(
        int $id,
        string|null $authCode,
    ) {
        $_params = array(
            'id' => $id,
            'authCode' => $authCode,
        );
        $_apiCallResult = $this->httpClient->apiCall('Ticket.getTicket', $_params);
        $_result = \ShockMedia\Generated\Tickets\Ticket::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    /**
     * @return string[]
     */
    public function listDepartments(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Ticket.listDepartments', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = $element0;
        }
        /** @var string[] $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @param \ShockMedia\Generated\Tickets\Attachment[] $attachments
     */
    public function createTicket(
        bool $highPriority,
        bool $highlyConfidential,
        \ShockMedia\Generated\Ticket\Ticket_sub7 $type,
        string|null $subject,
        string|null $message,
        array $attachments,
        int|null $serviceId,
    ) {
        $_params = array(
            'highPriority' => $highPriority,
            'highlyConfidential' => $highlyConfidential,
            'type' => $type,
            'subject' => $subject,
            'message' => $message,
            'attachments' => $attachments,
            'serviceId' => $serviceId,
        );
        $_apiCallResult = $this->httpClient->apiCall('Ticket.createTicket', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    /**
     * @param \ShockMedia\Generated\Tickets\Attachment[] $attachments
     */
    public function createMessage(
        int $ticketId,
        int $ticketVersion,
        string|null $message,
        array $attachments,
    ) {
        $_params = array(
            'ticketId' => $ticketId,
            'ticketVersion' => $ticketVersion,
            'message' => $message,
            'attachments' => $attachments,
        );
        $this->httpClient->apiCall('Ticket.createMessage', $_params);
    }

    public function getTicketCount(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Ticket.getTicketCount', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function getSearchUpToDate(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Ticket.getSearchUpToDate', $_params);
        /** @var bool $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Tickets\Ticket[]}
     */
    public function listTickets(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Tickets\TicketFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Ticket.listTickets', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Tickets\Ticket::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Tickets\Ticket[]} $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Tickets\Service[]}
     */
    public function listServices(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Ticket.listServices', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Tickets\Service::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Tickets\Service[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getAndDeleteMessage(
        int $messageId,
    ) {
        $_params = array(
            'messageId' => $messageId,
        );
        $_apiCallResult = $this->httpClient->apiCall('Ticket.getAndDeleteMessage', $_params);
        $_result = \ShockMedia\Generated\Tickets\MessageData::fromDecodedJson($_apiCallResult);
        return $_result;
    }

}

namespace ShockMedia\Generated\Container;

class ContainerClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Containers\Project[]}
     */
    public function listProjects(
        \ShockMedia\Generated\PageRequest $page,
    ) {
        $_params = array(
            'page' => $page,
        );
        $_apiCallResult = $this->httpClient->apiCall('Container.listProjects', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Containers\Project::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Containers\Project[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getProject(
        string|null $projectId,
    ) {
        $_params = array(
            'projectId' => $projectId,
        );
        $_apiCallResult = $this->httpClient->apiCall('Container.getProject', $_params);
        $_result = \ShockMedia\Generated\Containers\Project::fromDecodedJson($_apiCallResult);
        return $_result;
    }

}

namespace ShockMedia\Generated\Translation;

class TranslationClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function getTranslationData(
        \ShockMedia\Generated\Language $language,
    ) {
        $_params = array(
            'language' => $language,
        );
        $_apiCallResult = $this->httpClient->apiCall('Translation.getTranslationData', $_params);
        $_result = \ShockMedia\Generated\Translations\Translation::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    public function setPreferredLanguage(
        \ShockMedia\Generated\Language $language,
    ) {
        $_params = array(
            'language' => $language,
        );
        $this->httpClient->apiCall('Translation.setPreferredLanguage', $_params);
    }

    public function getPreferredLanguage(
    ) {
        $_params = array();
        $this->httpClient->apiCall('Translation.getPreferredLanguage', $_params);
    }

}

namespace ShockMedia\Generated\Lead;

class LeadClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function createLead(
        \ShockMedia\Generated\Leads\CreateLeadInput $input,
    ) {
        $_params = array(
            'input' => $input,
        );
        $this->httpClient->apiCall('Lead.createLead', $_params);
    }

}

namespace ShockMedia\Generated\Reminder;

class ReminderClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return \ShockMedia\Generated\Reminder\ReminderType[]
     */
    public function listReminders(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Reminder.listReminders', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Reminder\ReminderType::from($element0);
        }
        /** @var \ShockMedia\Generated\Reminder\ReminderType[] $_result */
        $_result = $var0;
        return $_result;
    }

    public function ackReminder(
        \ShockMedia\Generated\Reminder\ReminderType $reminderType,
    ) {
        $_params = array(
            'reminderType' => $reminderType,
        );
        $this->httpClient->apiCall('Reminder.ackReminder', $_params);
    }

}

namespace ShockMedia\Generated\Cloud;

class CloudClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function getCloud(
        string $name,
    ) {
        $_params = array(
            'name' => $name,
        );
        $_apiCallResult = $this->httpClient->apiCall('Cloud.getCloud', $_params);
        $_result = \ShockMedia\Generated\Clouds\Cloud::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Clouds\Cloud[]}
     */
    public function listClouds(
        \ShockMedia\Generated\PageRequest $page,
    ) {
        $_params = array(
            'page' => $page,
        );
        $_apiCallResult = $this->httpClient->apiCall('Cloud.listClouds', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Clouds\Cloud::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Clouds\Cloud[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function countClouds(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Cloud.countClouds', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

}

namespace ShockMedia\Generated\Contact;

class ContactClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Contacts\Contact[]}
     */
    public function listContacts(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Contacts\ContactFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Contact.listContacts', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Contacts\Contact::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Contacts\Contact[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getContact(
        int $id,
    ) {
        $_params = array(
            'id' => $id,
        );
        $_apiCallResult = $this->httpClient->apiCall('Contact.getContact', $_params);
        $_result = \ShockMedia\Generated\Contacts\Contact::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    /**
     * @return \ShockMedia\Generated\Contacts\ContactGroup[]
     */
    public function listContactGroups(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Contact.listContactGroups', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Contacts\ContactGroup::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Contacts\ContactGroup[] $_result */
        $_result = $var0;
        return $_result;
    }

    public function updateContact(
        \ShockMedia\Generated\Contacts\ContactUpdate $contact,
    ) {
        $_params = array(
            'contact' => $contact,
        );
        $this->httpClient->apiCall('Contact.updateContact', $_params);
    }

    public function createContact(
        \ShockMedia\Generated\Contacts\CreateContactInput $input,
    ) {
        $_params = array(
            'input' => $input,
        );
        $_apiCallResult = $this->httpClient->apiCall('Contact.createContact', $_params);
        $_result = \ShockMedia\Generated\Contacts\Contact::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    public function removeContact(
        int $contactId,
    ) {
        $_params = array(
            'contactId' => $contactId,
        );
        $this->httpClient->apiCall('Contact.removeContact', $_params);
    }

}

namespace ShockMedia\Generated\Account;

class AccountClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @param \ShockMedia\Generated\Auth\Permission[]|null $permissions
     */
    public function createAccount(
        int $contactId,
        string|null $username,
        \ShockMedia\Generated\Language $language,
        array|null $permissions,
    ) {
        $_params = array(
            'contactId' => $contactId,
            'username' => $username,
            'language' => $language,
            'permissions' => $permissions,
        );
        $this->httpClient->apiCall('Account.createAccount', $_params);
    }

    public function deleteAccount(
        int $accountId,
    ) {
        $_params = array(
            'accountId' => $accountId,
        );
        $this->httpClient->apiCall('Account.deleteAccount', $_params);
    }

    public function updateAccount(
        \ShockMedia\Generated\Account\UpdateAccountInput $input,
    ) {
        $_params = array(
            'input' => $input,
        );
        $this->httpClient->apiCall('Account.updateAccount', $_params);
    }

    public function getUsernameAvailability(
        string|null $username,
    ) {
        $_params = array(
            'username' => $username,
        );
        $_apiCallResult = $this->httpClient->apiCall('Account.getUsernameAvailability', $_params);
        /** @var bool $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

}

namespace ShockMedia\Generated\Announcement;

class AnnouncementClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function updateAnnouncementRead(
        int $announcementId,
    ) {
        $_params = array(
            'announcementId' => $announcementId,
        );
        $this->httpClient->apiCall('Announcement.updateAnnouncementRead', $_params);
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Announcements\Announcement[]}
     */
    public function listAnnouncements(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Announcements\AnnouncementFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Announcement.listAnnouncements', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Announcements\Announcement::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Announcements\Announcement[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getAnnouncement(
        int $announcementId,
    ) {
        $_params = array(
            'announcementId' => $announcementId,
        );
        $_apiCallResult = $this->httpClient->apiCall('Announcement.getAnnouncement', $_params);
        $_result = \ShockMedia\Generated\Announcements\Announcement::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    /**
     * @param (array{string,string})[] $message
     */
    public function createAnnouncement(
        array $message,
        string $icon,
        \ShockMedia\Generated\Announcements\AnnouncementSeverity $severity,
        string|null $expire,
    ) {
        $_params = array(
            'message' => $message,
            'icon' => $icon,
            'severity' => $severity,
            'expire' => $expire,
        );
        $_apiCallResult = $this->httpClient->apiCall('Announcement.createAnnouncement', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function deleteAnnouncement(
        int $announcementId,
    ) {
        $_params = array(
            'announcementId' => $announcementId,
        );
        $this->httpClient->apiCall('Announcement.deleteAnnouncement', $_params);
    }

    public function updateAnnouncement(
        \ShockMedia\Generated\Announcements\UpdateAnnouncementInput $input,
    ) {
        $_params = array(
            'input' => $input,
        );
        $this->httpClient->apiCall('Announcement.updateAnnouncement', $_params);
    }

}

namespace ShockMedia\Generated\DomainRegistration;

class DomainRegistrationClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

}

namespace ShockMedia\Generated\Invoice;

class InvoiceClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Invoices\Invoice[]}
     */
    public function listInvoices(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Invoices\InvoiceFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Invoice.listInvoices', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Invoices\Invoice::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Invoices\Invoice[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getInvoice(
        int $invoiceId,
        string|null $authCode,
    ) {
        $_params = array(
            'invoiceId' => $invoiceId,
            'authCode' => $authCode,
        );
        $_apiCallResult = $this->httpClient->apiCall('Invoice.getInvoice', $_params);
        $_result = \ShockMedia\Generated\Invoices\Invoice::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    public function getInvoiceCount(
        bool|null $openInvoices,
    ) {
        $_params = array(
            'openInvoices' => $openInvoices,
        );
        $_apiCallResult = $this->httpClient->apiCall('Invoice.getInvoiceCount', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

}

namespace ShockMedia\Generated\Promotion;

class PromotionClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Promotions\Promotion[]}
     */
    public function listPromotions(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Promotions\PromotionFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Promotion.listPromotions', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Promotions\Promotion::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Promotions\Promotion[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getPromotion(
        int $promotionId,
    ) {
        $_params = array(
            'promotionId' => $promotionId,
        );
        $_apiCallResult = $this->httpClient->apiCall('Promotion.getPromotion', $_params);
        $_result = \ShockMedia\Generated\Promotions\Promotion::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    /**
     * @param (array{string,string,string})[] $message
     */
    public function createPromotion(
        array $message,
        string $icon,
        bool $active,
    ) {
        $_params = array(
            'message' => $message,
            'icon' => $icon,
            'active' => $active,
        );
        $_apiCallResult = $this->httpClient->apiCall('Promotion.createPromotion', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function deletePromotion(
        int $promotionId,
    ) {
        $_params = array(
            'promotionId' => $promotionId,
        );
        $this->httpClient->apiCall('Promotion.deletePromotion', $_params);
    }

    public function updatePromotion(
        \ShockMedia\Generated\Promotions\UpdatePromotionInput $input,
    ) {
        $_params = array(
            'input' => $input,
        );
        $this->httpClient->apiCall('Promotion.updatePromotion', $_params);
    }

}

namespace ShockMedia\Generated\DnsTemplate;

class DnsTemplateClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Dnstemplates\DnsTemplate[]}
     */
    public function listTemplates(
        \ShockMedia\Generated\PageRequest $page,
    ) {
        $_params = array(
            'page' => $page,
        );
        $_apiCallResult = $this->httpClient->apiCall('DnsTemplate.listTemplates', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Dnstemplates\DnsTemplate::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Dnstemplates\DnsTemplate[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getTemplate(
        int $templateId,
    ) {
        $_params = array(
            'templateId' => $templateId,
        );
        $_apiCallResult = $this->httpClient->apiCall('DnsTemplate.getTemplate', $_params);
        $_result = \ShockMedia\Generated\Dnstemplates\DnsTemplate::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    public function deleteTemplate(
        int $templateId,
    ) {
        $_params = array(
            'templateId' => $templateId,
        );
        $this->httpClient->apiCall('DnsTemplate.deleteTemplate', $_params);
    }

    public function updateTemplate(
        \ShockMedia\Generated\Dnstemplates\TemplateUpdate $template,
    ) {
        $_params = array(
            'template' => $template,
        );
        $this->httpClient->apiCall('DnsTemplate.updateTemplate', $_params);
    }

    public function deleteRecord(
        int $templateId,
        int $recordId,
    ) {
        $_params = array(
            'templateId' => $templateId,
            'recordId' => $recordId,
        );
        $this->httpClient->apiCall('DnsTemplate.deleteRecord', $_params);
    }

    /**
     * @param \ShockMedia\Generated\Dnstemplates\DnsTemplateRecordInput[] $records
     */
    public function createTemplate(
        string $name,
        string $description,
        array $records,
    ) {
        $_params = array(
            'name' => $name,
            'description' => $description,
            'records' => $records,
        );
        $_apiCallResult = $this->httpClient->apiCall('DnsTemplate.createTemplate', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function createRecord(
        int $templateId,
        string $name,
        \ShockMedia\Generated\Domains\EditableDnsRecordType $type,
        int $ttl,
        int|null $prio,
        string $content,
    ) {
        $_params = array(
            'templateId' => $templateId,
            'name' => $name,
            'type' => $type,
            'ttl' => $ttl,
            'prio' => $prio,
            'content' => $content,
        );
        $this->httpClient->apiCall('DnsTemplate.createRecord', $_params);
    }

}

namespace ShockMedia\Generated\AcquiredOffering;

class AcquiredOfferingClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    public function getAcquiredOffering(
        int $id,
    ) {
        $_params = array(
            'id' => $id,
        );
        $_apiCallResult = $this->httpClient->apiCall('AcquiredOffering.getAcquiredOffering', $_params);
        $_result = \ShockMedia\Generated\Acquiredoffering\AcquiredOffering::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Acquiredoffering\AcquiredOffering[]}
     */
    public function listAcquiredOfferings(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Acquiredoffering\AcquiredOfferingFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('AcquiredOffering.listAcquiredOfferings', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Acquiredoffering\AcquiredOffering::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Acquiredoffering\AcquiredOffering[]} $_result */
        $_result = $var0;
        return $_result;
    }

    public function getAcquiredOfferingCount(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('AcquiredOffering.getAcquiredOfferingCount', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function getMailCount(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('AcquiredOffering.getMailCount', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function getResellerCount(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('AcquiredOffering.getResellerCount', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function getWebhostingCount(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('AcquiredOffering.getWebhostingCount', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function getMagentoCount(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('AcquiredOffering.getMagentoCount', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    public function getDomainCount(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('AcquiredOffering.getDomainCount', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

}

namespace ShockMedia\Generated\Server;

class ServerClient
{
    public function __construct(
        private readonly \ShockMedia\Generated\HttpClient $httpClient,
    ) {
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Servers\ServerSummary[]}
     */
    public function listServers(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Servers\ServerFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Server.listServers', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Servers\ServerSummary::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Servers\ServerSummary[]} $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @return (array{int|null,string|null})[]
     */
    public function listActiveServerIds(
        string|null $nameLike,
        bool|null $withActivities,
    ) {
        $_params = array(
            'nameLike' => $nameLike,
            'withActivities' => $withActivities,
        );
        $_apiCallResult = $this->httpClient->apiCall('Server.listActiveServerIds', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var1 = array();
            $var1[] = $element0[0];
            $var1[] = $element0[1];
            $var0[] = $var1;
        }
        /** @var (array{int|null,string|null})[] $_result */
        $_result = $var0;
        return $_result;
    }

    public function getServer(
        string $fqdn,
    ) {
        $_params = array(
            'fqdn' => $fqdn,
        );
        $_apiCallResult = $this->httpClient->apiCall('Server.getServer', $_params);
        $_result = \ShockMedia\Generated\Servers\Server::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    public function getVirtualMachine(
        string $fqdn,
    ) {
        $_params = array(
            'fqdn' => $fqdn,
        );
        $_apiCallResult = $this->httpClient->apiCall('Server.getVirtualMachine', $_params);
        $_result = \ShockMedia\Generated\Servers\VirtualMachineInfo::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    /**
     * @param string[] $fqdns
     * @return \ShockMedia\Generated\Servers\LgResourceState[]
     */
    public function getLgResourceStates(
        array $fqdns,
    ) {
        $_params = array(
            'fqdns' => $fqdns,
        );
        $_apiCallResult = $this->httpClient->apiCall('Server.getLgResourceStates', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Servers\LgResourceState::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Servers\LgResourceState[] $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @param string[] $fqdns
     * @return \ShockMedia\Generated\Servers\ZabbixOnlineCheck[]
     */
    public function getZabbixOnlineChecks(
        array $fqdns,
    ) {
        $_params = array(
            'fqdns' => $fqdns,
        );
        $_apiCallResult = $this->httpClient->apiCall('Server.getZabbixOnlineChecks', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Servers\ZabbixOnlineCheck::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Servers\ZabbixOnlineCheck[] $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @param array{\ShockMedia\Generated\RangeType,string|null,string|null} $interval
     */
    public function getStats(
        string $fqdn,
        array $interval,
        \ShockMedia\Generated\Servers\ServerStatisticsFilter $filter,
    ) {
        $_params = array(
            'fqdn' => $fqdn,
            'interval' => $interval,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Server.getStats', $_params);
        $_result = \ShockMedia\Generated\Servers\ServerStatistics::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    /**
     * @param string[] $itemids
     * @param array{\ShockMedia\Generated\RangeType,string|null,string|null} $interval
     */
    public function getSystemStats(
        array $itemids,
        array $interval,
        int|null $chunkCount,
    ) {
        $_params = array(
            'itemids' => $itemids,
            'interval' => $interval,
            'chunkCount' => $chunkCount,
        );
        $_apiCallResult = $this->httpClient->apiCall('Server.getSystemStats', $_params);
        $_result = \ShockMedia\Generated\Servers\ServerStatistics::fromDecodedJson($_apiCallResult);
        return $_result;
    }

    /**
     * @return \ShockMedia\Generated\Servers\MaintenanceInfo[]
     */
    public function listMaintenanceWindows(
        string $fqdn,
    ) {
        $_params = array(
            'fqdn' => $fqdn,
        );
        $_apiCallResult = $this->httpClient->apiCall('Server.listMaintenanceWindows', $_params);
        $var0 = array();
        foreach ($_apiCallResult as $element0) {
            $var0[] = \ShockMedia\Generated\Servers\MaintenanceInfo::fromDecodedJson($element0);
        }
        /** @var \ShockMedia\Generated\Servers\MaintenanceInfo[] $_result */
        $_result = $var0;
        return $_result;
    }

    /**
     * @param array{string|null,string|null} $window
     */
    public function createMaintenanceWindow(
        string $fqdn,
        string $name,
        array $window,
    ) {
        $_params = array(
            'fqdn' => $fqdn,
            'name' => $name,
            'window' => $window,
        );
        $this->httpClient->apiCall('Server.createMaintenanceWindow', $_params);
    }

    public function updateMaintenanceWindow(
        \ShockMedia\Generated\Servers\MaintenanceInfo $maintenanceWindow,
    ) {
        $_params = array(
            'maintenanceWindow' => $maintenanceWindow,
        );
        $this->httpClient->apiCall('Server.updateMaintenanceWindow', $_params);
    }

    public function deleteMaintenanceWindow(
        int $id,
    ) {
        $_params = array(
            'id' => $id,
        );
        $this->httpClient->apiCall('Server.deleteMaintenanceWindow', $_params);
    }

    public function getServerCount(
    ) {
        $_params = array();
        $_apiCallResult = $this->httpClient->apiCall('Server.getServerCount', $_params);
        /** @var int $_result */
        $_result = $_apiCallResult;
        return $_result;
    }

    /**
     * @return array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Servers\BackupJob[]}
     */
    public function listBackupJobs(
        \ShockMedia\Generated\PageRequest $page,
        \ShockMedia\Generated\Servers\BackupJobFilter $filter,
    ) {
        $_params = array(
            'page' => $page,
            'filter' => $filter,
        );
        $_apiCallResult = $this->httpClient->apiCall('Server.listBackupJobs', $_params);
        $var0 = array();
        $var0[] = \ShockMedia\Generated\PageResult::fromDecodedJson($_apiCallResult[0]);
        $var1 = array();
        foreach ($_apiCallResult[1] as $element1) {
            $var1[] = \ShockMedia\Generated\Servers\BackupJob::fromDecodedJson($element1);
        }
        $var0[] = $var1;
        /** @var array{\ShockMedia\Generated\PageResult,\ShockMedia\Generated\Servers\BackupJob[]} $_result */
        $_result = $var0;
        return $_result;
    }

}

//
// additional DTOs for anonymous schemas
//

namespace ShockMedia\Generated\Ticket;


enum Ticket_sub7: string
{
    case TECHNICAL = 'TECHNICAL';
    case ADMINISTRATIVE = 'ADMINISTRATIVE';
    case PRODUCT_INFO = 'PRODUCT_INFO';
    case GENERAL = 'GENERAL';
    case OTHER = 'OTHER';
}
