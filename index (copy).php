import React, { Component } from "react";

class Counter extends Component {
  state = {
    count: 0,
    tags: ["Item1", "Item2", "Item3"],
    quotes:[{text: 'Whatever the mind of man can conceive and believe, it can achieve.',
    author: 'Napoleon Hill'},
    {text: 'Strive not to be a success, but rather to be of value.',
    author: 'Albert Einstein'},
    {text: 'I attribute my success to this: I never gave or took any excuse.',
    author: 'Florence Nightingale'},
    {text: 'You miss 100% of the shots you don’t take.',
    author: 'Wayne Gretzky'},
    {text:'No more krasladkaya.',
    author: 'Theo'}]
  };

  styles = {
    fontSize : 20,
    fontWeight : "bold"
  };

  renderItems(){
    if (this.state.tags.length===0) return <p>Add items to the list</p>;
    return <ul>{this.state.tags.map(mytags=><li key={mytags}>{mytags}</li>)}</ul>

  }

  

  render() {
    let classes = this.getBadgeClasses();

    return (
      <div>
        <span style={this.styles} className={classes}>{this.formatCount()}</span>
        <button className="btn btn-secondary btn-sm">Increment</button>
        {this.renderItems()}
        
      </div>
    );
  }

  getBadgeClasses() {
    let classes = "badge m-2 badge-";
    classes += this.state.count === 0 ? "warning" : "primary";
    return classes;
  }

  formatCount(){
    const {count} = this.state;
    return count === 0 ? "zero": count;
  }
}

export default Counter;

