new Vue({
    el: '#app',
    data: {
        
        message: 'message',
        contacts: []
       
    },
    
    mounted: function () {
        
        axios.get('/contact/list').then(response => this.contacts = response.data);
    }


});

