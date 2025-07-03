import {type ChildrenType} from "@/types";
import {LayoutProvider} from "@/context/useLayoutContext";
import { ToastContainer } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

const AppWrapper = ({children}: ChildrenType) => {
    return (
        <LayoutProvider>
            {children}
            <ToastContainer
                position="top-right"
                autoClose={2000}
                hideProgressBar={false}
                newestOnTop
                closeOnClick
                rtl={false}
                pauseOnFocusLoss
                draggable
                pauseOnHover
                theme="light"
            />
        </LayoutProvider>
    )
}

export default AppWrapper;