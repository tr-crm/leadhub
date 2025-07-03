import {ChildrenType} from "@/types";
import MainLayout from "@/layouts/MainLayout";

const Layout = ({children}: ChildrenType) => {
    return (
        <MainLayout>
            {children}
        </MainLayout>
    )
}

export default Layout