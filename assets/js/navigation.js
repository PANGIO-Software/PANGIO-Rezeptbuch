const Navigation = {
    toggleNavigation: function() {
        const navigation = document.getElementById('navigation');

        navigation.classList.toggle('nav-active');
    },

    redirect: function(uri, id = 0) {
        window.location.href = id > 0 ? `${baseURL}${uri}/${id}` : `${baseURL}${uri}`;
    },

    confirmDeletion: function(uri, id) {
        const confirmation = confirm(lang.messages.confirmations.delete);

        if (confirmation) {
            window.location.href = `${baseURL}${uri}/${id}`;
        }
    }
};