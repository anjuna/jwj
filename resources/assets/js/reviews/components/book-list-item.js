import React from 'react';


export default class BookListItem extends React.Component {

    render (){
        return (
            <div>
                <div>
                    {this.props.book.name}
                </div>
            </div>
        )
    }
}
