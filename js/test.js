var Example = React.createClass({
  render: function(){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            var events = JSON.parse(this.resoponseText);
            return (
                <ul>
                    {events.map(function(event){
                        return <li>{event["name"]}</li>;
                }
                </ul>

            )
  };
  xhttp.open("GET", "Get_Events.php", true);
  xhttp.send();
  }
})





ReactDOM.render(
  <Example />,
  document.getElementById('example')
);
