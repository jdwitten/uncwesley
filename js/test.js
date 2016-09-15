var Example = React.createClass({
    componentDidMount(){
        this.search("http://uncwesley.azurewebsites.net/Get_Prayers.php")
    },
    
    getInitialState: function(){
      return{
          prayerData: ["Waiting for Ajax"]
      }  
    },
    showResults: function(response){
        var content = [];
        console.log(response)
        for(var i=0; i<response.length; i++){
            content.push(response["content"])
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
