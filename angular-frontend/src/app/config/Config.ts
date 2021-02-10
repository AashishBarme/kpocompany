const Config = {
    ApiBaseUrl: 'https://kpocompany.com/backend/wp-json/wp/v2/'
};

const ApiEndPoints = {
    default: Config.ApiBaseUrl ,
    widget: Config.ApiBaseUrl + 'widgets',
    customizer: Config.ApiBaseUrl + 'customizer-options',
    navbar: Config.ApiBaseUrl + 'primary-menu-api',
    services : Config.ApiBaseUrl + 'services',
    careers : Config.ApiBaseUrl + 'career',
    homeaboutus : Config.ApiBaseUrl + 'home-about-us',
    homefaq: Config.ApiBaseUrl + 'home-faq',
    homeservices: Config.ApiBaseUrl+ 'home-services',
    contact: Config.ApiBaseUrl + 'contact',
};
export { Config, ApiEndPoints};