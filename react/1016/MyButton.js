function MyButton(props) {
    const [isClicked, setIsCilcked] = React.useState(false);

    return React.createElement(
        'button',
        { onClick: () => setIsCilcked(true) },
        isClicked ? 'Clicked' : 'Click here !!'
    )
}

const domContainer = document.querySelector('#root');
const root = ReactDOM.createRoot(domContainer);
root.render(React.createElement(MyButton));