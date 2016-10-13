import React from 'react';

const style = {
    margin: '5px 0',
    padding: '10px',
    cursor: 'pointer'
}

export default class BookListItem extends React.Component {

    render (){
        return (
            <div style={style}>
                <div onClick={this.props.selectBook.bind(this, this.props.book)}>
                    {this.props.book.name}
                </div>
            </div>
        )
    }
}
