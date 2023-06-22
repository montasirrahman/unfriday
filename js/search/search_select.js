        document.querySelector('#searchForm').addEventListener('submit', function (e) {
        e.preventDefault()
        
        let searchQuery = document.querySelector('[name="query_term"]').value
        let selectedSite = document.querySelector('#selectSite').value
        
        window.open(
            selectedSite + searchQuery,
            '_self'
        );

        })