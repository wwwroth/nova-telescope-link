Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'telescope-link',
            path: '/telescope-link',
            component: require('./components/Tool'),
        },
    ])
})
