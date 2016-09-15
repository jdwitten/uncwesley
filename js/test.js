var Example = React.createClass({
    getInitialState: function(){
      return{
          prayerData: ["Waiting for AJAX"]
      }  
    },
  componentDidMount: function(){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            var prayers = this.responseText
            var prayerContent = []
            for(var i=0; i<prayers.length;i++){
                console.log(prayers[i]["content"])
              prayerContent.push(prayers[i]["content"])
            }
            console.log(prayerContent)
            setState({
                prayerData: prayerContent 
            })
      }
  };
  xhttp.open("GET", "Get_Prayers.php", true);
  xhttp.send();
  return <h1>Waiting for AJAX</h1>
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
