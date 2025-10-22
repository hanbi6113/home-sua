import React from "react";

class Counter extends React.Compotent {
    constructor(props) {
        super(props);

        this.state = {
            count: 0
        };

        console.log('construct...');
    }

    componentDidMount() {
        console.log('마운트 된다.');
    }

    componentDidUpdate(prevProps, prevState) {
        console.log(`컴포넌트가 업데이트: 카운트가 ${prevState.count} 에서 ${this.state.count}로 변경되었습니다.`);
    }

    componentWillUnmount() {
        console.log('마운트 해제 된다.');
    }
    handleclick=()=>{
        this.setState({
            count: this.state.count + 1
        });
    }

    render() {
        console.log('render');
        return (
            <div>
                <h1>카운터: {this.state.count}</h1>
                <button onClick={this.handleclick}>증가</button>
            </div>
        );
    }
}
let count = document.querySelector("#out").innerHTML
count++;
document.querySelector("#out").innerHTML = count;
export default Counter;