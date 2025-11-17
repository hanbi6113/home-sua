// TodoPage.jsx
import ToDoForm from "../component/ToDoForm";
import TodoList from "../component/ToDoList";

export default function TodoPage(){
    return(
        <div className="mx-auto max-w-xl p-10 space-y-4">
            <h1 className="text-xl text-black">
                오늘 할 일 with 파이어베이스
            </h1>
            
                <ToDoForm/>
                <TodoList/>
           
        </div>
    );
}