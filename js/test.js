var Example = React.createClass({
  render: function(){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            var events = JSON.parse(this.resoponseText);
            eventNames = []
            foreach(event in events){
              eventNames.push(event["name"])
            }
            return (
              <ul>
              {eventNames}
              </ul

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
