import {type EChartsOption} from "echarts";
import * as echarts from 'echarts/core';
import type {EChartsReactProps} from "echarts-for-react";
import ReactECharts from "echarts-for-react";
import {useMemo} from "react";
import {useLayoutContext} from "@/context/useLayoutContext";

type EChartClientProps = {
    getOptions: () => EChartsOption
    extensions: any[]
} & Omit<EChartsReactProps, 'option'>

let extensionsRegistered = false;

const EChartClient = ({getOptions, extensions, ...props}: EChartClientProps) => {
    if (!extensionsRegistered) {
        echarts.use(extensions);
        extensionsRegistered = true;
    }

    const {skin, theme} = useLayoutContext();

    const options = useMemo(() => getOptions(), [skin, theme]);

    return (
        <ReactECharts
            echarts={echarts}
            {...props}
            option={options}
        />
    );
};

export default EChartClient;
