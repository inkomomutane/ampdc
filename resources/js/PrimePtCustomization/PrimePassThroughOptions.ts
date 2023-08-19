import { CalendarPassThroughOptions } from "primevue/calendar";
import { DropdownContext, DropdownPassThroughOptions } from "primevue/dropdown";
import { EditorPassThroughOptions } from "primevue/editor";
import { MultiSelectContext, MultiSelectPassThroughOptions, MultiSelectState } from "primevue/multiselect";

export const DropdownPT: DropdownPassThroughOptions = {
    root : {
        class : 'flex flex-row p-2   w-full   border focus:border-slate-500 focus:ring-slate-500 rounded-sm  justify-end content-end items-center mt-2'
    },
    input : {
        class : ' placeholder:text-sm text-gray-500 mr-3'
    },
    trigger : {
        class : 'px-6'
    },
    panel: {
        class : 'p-2 bg-white shadow rounded-sm'
    },

    filterInput : {
        class:"border-slate-300 border  ring-0  focus:border-slate-500 focus:ring-slate-500 rounded-sm shadow-sm w-full placeholder:text-sm"

    },
    filterIcon : {
        class : 'mx-8 invisible'
    },
    wrapper : {
        class : 'py-2'
    },
    item : ((context :DropdownContext ) => ({
        class : context.selected ? 'bg-primary-500' : 'hover:bg-primary-300'
    }))


};

export const MultiSelectPt: MultiSelectPassThroughOptions = {
    root : {
        class : 'flex flex-row p-2   w-full   border focus:border-slate-500 focus:ring-slate-500 rounded-sm  justify-end content-end items-center mt-2'
    },
    trigger : {
        class : 'px-6'
    },
    panel: {
        class : 'p-2 bg-white shadow rounded-sm'
    },

    filterInput : {
        class:"border-slate-300 border  ring-0  focus:border-slate-500 focus:ring-slate-500 rounded-sm shadow-sm !w-[100%] placeholder:text-sm"

    },
    filterIcon : {
        class : 'mx-8 invisible'
    },
    wrapper : {
        class : 'py-2'
    },

    headerCheckbox :  ((context : MultiSelectContext) => ({
        class : context.selected==true ? 'bg-primary-500' : 'border-2 border-gray-500 mr-2 rounded w-5 h-5'

    })),
    closeIcon : {
        class : 'ml-2 mr-1 relative'
    },
    item: ({  context } :any) => ({
        class: context.selected ? 'p-1 bg-orange-100 text-orange-900 font-medium p-1 px-4'
        : 'p-1 px-4 hover:bg-orange-50 cursor-pointer'
    }),

}

export const EditorPT : EditorPassThroughOptions  = {
    root : {
        class : 'bg-white p-2 px-0 rounded-sm'
    }
}
export const CalendarPT: CalendarPassThroughOptions = {
    root: ({ props }) => ({
        class: [
            "inline-flex w-full relative mt-2 ",
            {
                "opacity-60 select-none pointer-events-none cursor-default":
                    props.disabled,
            },
        ],
    }),
    input: {
        class: `border border-gray-300 text-gray-900 sm:text-sm rounded
        focus:ring-primary-600 focus:border-primary-600 block w-full p-2
         dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
          dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500
          placeholder:text-sm`,
    },
    panel: ({ props }) => ({
        class: [
            "bg-white dark:bg-gray-900",
            "min-w-[350px]",
            {
                "shadow-md border-0 absolute": !props.inline,
                "inline-block overflow-x-auto border border-gray-300 dark:border-blue-900/40 p-2 rounded-lg":
                    props.inline,
            },
        ],
    }),
    header: {
        class: [
            "flex items-center justify-between",
            "p-2 text-gray-700 dark:text-white/80 bg-white dark:bg-gray-900 font-semibold m-0 border-b border-gray-300 dark:border-blue-900/40 rounded-t-lg",
        ],
    },
    title: "leading-8 mx-auto",
    monthTitle: ({ props, state }) => ({
        class: [
            "text-gray-700 dark:text-white/80 transition duration-200 font-semibold p-2",
            "mr-2",
            "hover:text-blue-500",
        ],
    }),
    monthPicker: {
        class: "my-2",
    },
    month: (el) => ({
        class: [
            "w-1/3 inline-flex items-center justify-center cursor-pointer overflow-hidden relative ",
            "p-2 transition-shadow duration-200 rounded-lg",
            "focus:outline-none focus:outline-offset-0 focus:shadow-[0_0_0_0.2rem_rgba(191,219,254,1)] dark:focus:shadow-[0_0_0_0.2rem_rgba(147,197,253,0.5)]",
            {
                "bg-primary-500": el.state.pm,
            },
        ],
    }),
    yearPicker: {
        class: ["my-2"],
    },
    year: () => ({
        class: [
            "w-1/2 inline-flex items-center justify-center cursor-pointer overflow-hidden relative",
            "p-2 transition-shadow duration-200 rounded-lg",
            "focus:outline-none focus:outline-offset-0 focus:shadow-[0_0_0_0.2rem_rgba(191,219,254,1)] dark:focus:shadow-[0_0_0_0.2rem_rgba(147,197,253,0.5)]",
        ],
    }),
    yearTitle: {
        class: [
            "text-gray-700 dark:text-white/80 transition duration-200 font-semibold p-2",
            "hover:text-blue-500",
        ],
    },
    table: {
        class: ["border-collapse w-full", "my-2"],
    },
    day: "p-2",
    separator: "text-xl",
    separatorContainer: "flex items-center flex-col px-2",
    group: {
        class: [
            "flex-1",
            "border-l border-gray-300 pr-0.5 pl-0.5 pt-0 pb-0",
            "first:pl-0 first:border-l-0",
        ],
    },
    tableHeader: {
        class: "p-2",
    },
};

