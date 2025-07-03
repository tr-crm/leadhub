'use client'
import {ChildrenType} from "@/types";
import {LayoutProvider} from "@/context/useLayoutContext";

const AppWrapper = ({children}: ChildrenType) => {
    return (
        <LayoutProvider>
            {children}
        </LayoutProvider>
    )
}

export default AppWrapper;