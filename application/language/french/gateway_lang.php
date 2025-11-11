<?php

/**
 * Contains the language translations for the payment gateways.
 */
$lang = [
    // General strings
    'online_payment'                 => 'Paiement en ligne',
    'online_payments'                => 'Paiements en ligne',
    'online_payment_for'             => 'Paiement en ligne pour',
    'online_payment_for_invoice'     => 'Paiement en ligne pour la facture',
    'online_payment_method'          => 'Méthode de paiement en ligne',
    'online_payment_creditcard_hint' => 'Si vous souhaitez payer par carte de crédit, veuillez saisir les informations ci-dessous.<br/>Les informations de carte de crédit ne sont pas stockées sur nos serveurs et seront transférées à la passerelle de paiement en ligne via une connexion sécurisée.',
    'enable_online_payments'         => 'Activer les paiements en ligne',
    'payment_provider'               => 'Fournisseur de paiement',
    'provider_response'              => 'Réponse du fournisseur',
    'add_payment_provider'           => 'Ajouter un fournisseur de paiement',
    'transaction_reference'          => 'Référence de transaction',
    'transaction_successful'         => 'Transaction réussie',
    'payment_description'            => 'Paiement pour la facture %s',

    // Credit card strings
    'creditcard_cvv'              => 'CVV / CSC',
    'creditcard_details'          => 'Détails de la carte de crédit',
    'creditcard_expiry_month'     => 'Mois d\'expiration',
    'creditcard_expiry_year'      => 'Année d\'expiration',
    'creditcard_number'           => 'Numéro de carte de crédit',
    'online_payment_card_invalid' => 'Cette carte de crédit est invalide. Veuillez vérifier les informations fournies.',

    // Payment Gateway Fields
    'online_payment_apiLoginId'          => 'ID de connexion API', // Field for AuthorizeNet_AIM
    'online_payment_transactionKey'      => 'Clé de transaction', // Field for AuthorizeNet_AIM
    'online_payment_testMode'            => 'Mode test', // Field for AuthorizeNet_AIM
    'online_payment_developerMode'       => 'Mode développeur', // Field for AuthorizeNet_AIM
    'online_payment_websiteKey'          => 'Clé du site web', // Field for Buckaroo_Ideal
    'online_payment_secretKey'           => 'Clé secrète', // Field for Buckaroo_Ideal
    'online_payment_merchantId'          => 'ID commerçant', // Field for CardSave
    'online_payment_password'            => 'Mot de passe', // Field for CardSave
    'online_payment_apiKey'              => 'Clé API', // Field for Coinbase
    'online_payment_secret'              => 'Secret', // Field for Coinbase
    'online_payment_accountId'           => 'ID de compte', // Field for Coinbase
    'online_payment_storeId'             => 'ID de boutique', // Field for FirstData_Connect
    'online_payment_sharedSecret'        => 'Secret partagé', // Field for FirstData_Connect
    'online_payment_appId'               => 'ID d\'application', // Field for GoCardless
    'online_payment_appSecret'           => 'Secret d\'application', // Field for GoCardless
    'online_payment_accessToken'         => 'Jeton d\'accès', // Field for GoCardless
    'online_payment_merchantAccessCode'  => 'Code d\'accès commerçant', // Field for Migs_ThreeParty
    'online_payment_secureHash'          => 'Hachage sécurisé', // Field for Migs_ThreeParty
    'online_payment_siteId'              => 'ID de site', // Field for MultiSafepay
    'online_payment_siteCode'            => 'Code de site', // Field for MultiSafepay
    'online_payment_accountNumber'       => 'Numéro de compte', // Field for NetBanx
    'online_payment_storePassword'       => 'Mot de passe de boutique', // Field for NetBanx
    'online_payment_merchantKey'         => 'Clé commerçant', // Field for PayFast
    'online_payment_pdtKey'              => 'Clé PDT', // Field for PayFast
    'online_payment_username'            => 'Nom d\'utilisateur', // Field for Payflow_Pro
    'online_payment_vendor'              => 'Fournisseur', // Field for Payflow_Pro
    'online_payment_partner'             => 'Partenaire', // Field for Payflow_Pro
    'online_payment_pxPostUsername'      => 'Nom d\'utilisateur Px Post', // Field for PaymentExpress_PxPay
    'online_payment_pxPostPassword'      => 'Mot de passe Px Post', // Field for PaymentExpress_PxPay
    'online_payment_signature'           => 'Signature', // Field for PayPal_Express
    'online_payment_referrerId'          => 'ID de référent', // Field for SagePay_Direct
    'online_payment_transactionPassword' => 'Mot de passe de transaction', // Field for SecurePay_DirectPost
    'online_payment_subAccountId'        => 'ID de sous-compte', // Field for TargetPay_Directebanking
    'online_payment_secretWord'          => 'Mot secret', // Field for TwoCheckout
    'online_payment_installationId'      => 'ID d\'installation', // Field for WorldPay
    'online_payment_callbackPassword'    => 'Mot de passe de rappel', // Field for WorldPay

    // Status / Error Messages
    'online_payment_payment_cancelled'  => 'Paiement annulé.',
    'online_payment_payment_failed'     => 'Paiement échoué. Veuillez réessayer.',
    'online_payment_payment_successful' => 'Paiement pour la facture %s réussi !',
    'online_payment_payment_redirect'   => 'Veuillez patienter pendant que nous vous redirigeons vers la page de paiement...',
    'online_payment_3dauth_redirect'    => 'Veuillez patienter pendant que nous vous redirigeons vers l\'émetteur de votre carte pour authentification...',
];
