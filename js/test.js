var Example = React.createClass({
    componentDidMount(){
        this.search("http://uncwesley.azurewebsites.net/Get_Prayers.php")
    },
    
    getInitialState: function(){
      return{
          prayerData: [{content:"Waiting for AJAX"}]
      }  
    },
    showResults: function(response){
        var content = [];
        for(var i=0; i<response.length; i++){
            content.push(response[i]["content"])
        }
            console.log(content)
            this.setState({
            prayerData: content
        })
    },
    search: function(URL){
        $.ajax({
            type:"GET",
            datatype:'jsonp',
            url:URL,
            success: function(response){
                this.showResults(response);
            }.bind(this)
        })
    },
    
    render: function(){
        return(
            <ul>{this.state.prayerData}</ul>
        )
    }
    
    
})





ReactDOM.render(
  <Example />,
  document.getElementById('example')
);
