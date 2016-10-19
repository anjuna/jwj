import React from 'react';
// import Radium from 'radium'; //better inline styles DECORATORS NOT WORKING IN BABEL 6

export default class BookListItem extends React.Component {

    constructor(){
        super();
        this.state = {
            hovering:false
        };
    }

    hovered() {
        this.setState({hovering: true});
    }

    exited() {
        this.setState({hovering: false});
    }

    render (){
        let styles = {
            display: 'flex',
            margin: '5px 0',
            padding: '10px',
            cursor: 'pointer',
            backgroundColor: this.state.hovering ? '#ccc' : 'transparent',
            borderLeft: this.props.currentBook.id == this.props.book.id ? 'solid 5px #eee' : ''
        };

        return (
            <div
                style={styles}
                onMouseOver={this.hovered.bind(this)}
                onMouseOut={this.exited.bind(this)}
                onClick={this.props.selectBook.bind(this, this.props.book)}
            >
                <div>
                    {this.props.book.name}
                </div>
            </div>
        )
    }
}
