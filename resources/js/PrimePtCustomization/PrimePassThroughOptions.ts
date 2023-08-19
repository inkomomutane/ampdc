import { DropdownContext, DropdownPassThroughOptions } from "primevue/dropdown";
import { EditorPassThroughOptions } from "primevue/editor";

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
export const EditorPT : EditorPassThroughOptions  = {
    root : {
        class : 'bg-white p-2 px-0 rounded-sm'
    }
}