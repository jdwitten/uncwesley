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
        this.setState({
            prayerData: response
        })
         console.log(this.state.prayerData)
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
        var content = []
        for(var i=0; i<this.state.prayerData.length; i++){
           content.push(this.state.prayerData[i]["content"]); 
        }
        return(
            <ul>{content}</ul>
        )
    }
    
    
})





ReactDOM.render(
  <Example />,
  document.getElementById('example')
);
