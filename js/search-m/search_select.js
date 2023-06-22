        document.querySelector('#searchFormMoblie').addEventListener('submit', function (e) {
        e.preventDefault()
        
        let searchQuery = document.querySelector('[name="search_query_mobile"]').value
        let selectedSite = document.querySelector('#selectSiteMobile').value
        
        window.open(
            selectedSite + searchQuery,
            '_self'
        );

        })