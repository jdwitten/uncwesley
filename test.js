
var MyComponentClass = React.createClass({
  render: function () {
    return (<h1>Hello world</h1>);
  }
});

ReactDOM.render(
  <MyComponentClass />,
  document.getElementById('app')
);
